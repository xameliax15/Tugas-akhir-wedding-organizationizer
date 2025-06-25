<?php
// require_once model Wedding jika sudah ada
function wedding_controller($action) {
    global $weddings;
    if ($_SESSION['role'] != 1) {
        header('Location: ?page=dashboard');
        exit;
    }
    // Dummy data jika belum ada model
    $weddings = [];
    return __DIR__ . '/../views/wedding_list.php';
}
?> 