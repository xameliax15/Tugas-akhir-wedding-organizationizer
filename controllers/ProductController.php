<?php
// require_once model Product jika sudah ada
function product_controller($action) {
    if ($_SESSION['role'] != 1) {
        header('Location: ?page=dashboard');
        exit;
    }
    // $products = get_all_products();
    return __DIR__ . '/../views/product_list.php';
}
?> 