<?php
// require_once model Booking jika sudah ada
function booking_controller($action) {
    global $bookings;
    if ($_SESSION['role'] != 1) {
        header('Location: ?page=dashboard');
        exit;
    }
    // Dummy data jika belum ada model
    $bookings = [];
    return __DIR__ . '/../views/booking_list.php';
}
?> 