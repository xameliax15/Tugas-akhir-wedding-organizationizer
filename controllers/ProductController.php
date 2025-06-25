<?php
// require_once model Product jika sudah ada
function product_controller($action) {
    global $products;
    if ($_SESSION['role'] != 1) {
        header('Location: ?page=dashboard');
        exit;
    }
    // Dummy data produk
    if (!isset($_SESSION['products'])) {
        $_SESSION['products'] = [
            ['id' => 'P001', 'name' => 'Produk A', 'stock' => 10, 'price' => 10000, 'description' => 'Deskripsi produk A'],
            ['id' => 'P002', 'name' => 'Produk B', 'stock' => 5, 'price' => 20000, 'description' => 'Deskripsi produk B'],
        ];
    }
    if ($action === 'add') {
        return __DIR__ . '/../views/product_form.php';
    }
    if ($action === 'save' && $_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = 'P' . str_pad(count($_SESSION['products']) + 1, 3, '0', STR_PAD_LEFT);
        $name = $_POST['name'];
        $price = $_POST['price'];
        $stock = $_POST['stock'];
        $description = $_POST['description'];
        // Simpan gambar jika ada
        $photo = null;
        if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
            $ext = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
            $photo = 'uploads/' . uniqid('produk_') . '.' . $ext;
            move_uploaded_file($_FILES['foto']['tmp_name'], $photo);
        }
        $_SESSION['products'][] = [
            'id' => $id,
            'name' => $name,
            'price' => $price,
            'stock' => $stock,
            'description' => $description,
            'photo' => $photo
        ];
        header('Location: ?page=product');
        exit;
    }
    $products = $_SESSION['products'];
    return __DIR__ . '/../views/product_list.php';
}
?> 