<?php
// require_once model Booking jika sudah ada
function booking_controller($action) {
    if ($_SESSION['role'] != 1) {
        header('Location: ?page=dashboard');
        exit;
    }
    // $bookings = get_all_bookings();
    return __DIR__ . '/../views/booking_list.php';
}
?> 