<?php
session_start();
require_once 'config/db.php';

// Routing logic
$page = $_GET['page'] ?? 'dashboard';
$action = $_GET['action'] ?? null;
$content = '';
$error = '';
$success = '';

// Auth & controller includes
require_once __DIR__ . '/controllers/AuthController.php';
require_once __DIR__ . '/controllers/DashboardController.php';
require_once __DIR__ . '/controllers/UserController.php';
require_once __DIR__ . '/controllers/ProductController.php';
require_once __DIR__ . '/controllers/WeddingController.php';
require_once __DIR__ . '/controllers/BookingController.php';

// Login, logout, signup
if ($page === 'login' || $page === 'logout') {
    $content = auth_controller($page === 'logout' ? 'logout' : null);
    include __DIR__ . '/views/login.php';
    exit();
}
if ($page === 'signup') {
    $content = signup_controller();
    include __DIR__ . '/views/signup.php';
    exit();
}

// Cek login admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 1) {
    header('Location: ?page=login');
    exit();
}

// Routing ke controller
switch ($page) {
    case 'dashboard':
        dashboard_controller();
        break;
    case 'user':
        $content = user_controller($action);
        include $content;
        exit();
    case 'edit_user':
        require_once __DIR__ . '/models/User.php';
        $id = $_GET['id'] ?? null;
        if ($id) {
            $user = get_user_by_id($id);
            if ($user) {
                include __DIR__ . '/views/edit_user.php';
                exit();
            }
        }
        $error = 'User tidak ditemukan!';
        include __DIR__ . '/views/user_list.php';
        exit();
    case 'user_role':
        require_once __DIR__ . '/models/User.php';
        $id = $_GET['id'] ?? null;
        if ($id) {
            $user = get_user_by_id($id);
            if ($user) {
                include __DIR__ . '/views/user_role.php';
                exit();
            }
        }
        $error = 'User tidak ditemukan!';
        include __DIR__ . '/views/user_list.php';
        exit();
    case 'product':
        $content = product_controller($action);
        include $content;
        exit();
    case 'wedding':
        $content = wedding_controller($action);
        include $content;
        exit();
    case 'booking':
        $content = booking_controller($action);
        include $content;
        exit();
    default:
        $content = __DIR__ . '/views/dashboard.php';
        $error = 'Halaman tidak ditemukan!';
        break;
}

