<?php
$page = $_GET['page'] ?? 'dashboard';
$action = $_GET['action'] ?? '';

switch ($page) {
    case 'user':
        require_once '../controllers/UserController.php';
        $content = user_controller($action);
        break;
    case 'product':
        require_once '../controllers/ProductController.php';
        $content = product_controller($action);
        break;
    case 'wedding':
        require_once '../controllers/WeddingController.php';
        $content = wedding_controller($action);
        break;
    case 'booking':
        require_once '../controllers/BookingController.php';
        $content = booking_controller($action);
        break;
    default:
        $content = '../views/dashboard.php';
}
include '../views/layout.php';
?> 