<?php
// require_once model Product jika sudah ada
function product_controller($action) {
    global $products;
    if ($_SESSION['role'] != 1) {
        header('Location: ?page=dashboard');
        exit;
    }
    // Dummy data jika belum ada model
    $products = [];
    return __DIR__ . '/../views/product_list.php';
}
?> 