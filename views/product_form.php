<h1><?= isset($product) ? 'Edit' : 'Tambah' ?> Produk</h1>
<form method="post" enctype="multipart/form-data">
    <label>Nama</label><br>
    <input type="text" name="name" value="<?= $product['name'] ?? '' ?>"><br>
    <label>Harga</label><br>
    <input type="number" name="price" value="<?= $product['price'] ?? '' ?>"><br>
    <label>Stok</label><br>
    <input type="number" name="stock" value="<?= $product['stock'] ?? '' ?>"><br>
    <label>Deskripsi</label><br>
    <textarea name="description"><?= $product['description'] ?? '' ?></textarea><br>
    <label>Gambar</label><br>
    <input type="file" name="photo"><br>
    <button type="submit">Update</button>
</form> 