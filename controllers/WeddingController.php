<?php
// require_once model Wedding jika sudah ada
function wedding_controller($action) {
    if ($_SESSION['role'] != 1) {
        header('Location: ?page=dashboard');
        exit;
    }
    // $weddings = get_all_weddings();
    return __DIR__ . '/../views/wedding_list.php';
}
?> 