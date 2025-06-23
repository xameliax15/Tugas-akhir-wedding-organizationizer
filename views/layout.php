<!DOCTYPE html>
<html>
<head>
    <title>Linda Salon Admin</title>
    <link rel="stylesheet" href="/public/assets/style.css">
</head>
<body>
    <div class="sidebar">
        <h2>LINDA SALON</h2>
        <ul>
            <li><a href="?page=dashboard">Menu Admin</a></li>
            <li><a href="?page=user">Data User</a></li>
            <li><a href="?page=product">Data Produk</a></li>
            <li><a href="?page=wedding">Data Paket Wedding</a></li>
            <li><a href="?page=booking">Data Booking</a></li>
        </ul>
    </div>
    <div class="main-content">
        <?php include $content; ?>
    </div>
</body>
</html> 