<?php
require_once __DIR__ . '/../models/User.php';
global $conn;
function dashboard_controller() {
    global $conn, $user, $products_count, $weddings_count, $bookings_count, $users_count;
    // Ambil user login
    $user = get_user_by_id($_SESSION['user_id']);
    // Hitung jumlah produk
    $result = $conn->query('SELECT COUNT(*) as total FROM Product');
    $products_count = $result ? (int)$result->fetch_assoc()['total'] : 0;
    // Hitung jumlah paket wedding
    $result = $conn->query('SELECT COUNT(*) as total FROM Wedding');
    $weddings_count = $result ? (int)$result->fetch_assoc()['total'] : 0;
    // Hitung jumlah booking
    $result = $conn->query('SELECT COUNT(*) as total FROM Booking');
    $bookings_count = $result ? (int)$result->fetch_assoc()['total'] : 0;
    // Hitung jumlah user
    $result = $conn->query('SELECT COUNT(*) as total FROM User');
    $users_count = $result ? (int)$result->fetch_assoc()['total'] : 0;
    include __DIR__ . '/../views/dashboard.php';
    exit;
}
?> 