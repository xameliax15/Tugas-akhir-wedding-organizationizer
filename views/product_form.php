<style>
body { font-family: 'Roboto', Arial, sans-serif; background: #f4f6f9; }
.form-container {
  max-width: 400px;
  margin: 40px auto;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.08);
  padding: 32px 24px;
}
.form-container h1 { text-align: center; color: #1976d2; margin-bottom: 24px; }
.form-container label { font-weight: 500; color: #1976d2; margin-top: 10px; display: block; }
.form-container input, .form-container textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 14px;
  border: 1px solid #b3c6e0;
  border-radius: 6px;
  background: #f7faff;
  font-size: 15px;
}
.form-container button {
  width: 100%;
  background: #1976d2;
  color: #fff;
  border: none;
  border-radius: 6px;
  padding: 12px;
  font-size: 16px;
  font-weight: 600;
  cursor: pointer;
  transition: background 0.2s;
}
.form-container button:hover { background: #1565c0; }
</style>
<div class="form-container">
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
</div> 