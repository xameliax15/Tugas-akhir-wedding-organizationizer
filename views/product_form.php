<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tambah Produk - LINDA SALON</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    body { font-family: 'Roboto', Arial, sans-serif; background: #f4f6f9; margin: 0; }
    .container-admin { display: flex; min-height: 100vh; }
    .sidebar {
      width: 240px;
      background: #23282d;
      color: #fff;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      padding: 0;
    }
    .sidebar .brand {
      font-size: 1.3rem;
      font-weight: 700;
      letter-spacing: 1px;
      padding: 32px 32px 16px 32px;
      width: 100%;
      text-align: left;
      border-bottom: 1px solid #444;
    }
    .sidebar .menu {
      width: 100%;
      margin-top: 24px;
    }
    .sidebar .menu ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    .sidebar .menu li {
      width: 100%;
    }
    .sidebar .menu a {
      display: flex;
      align-items: center;
      gap: 12px;
      color: #b4bcc2;
      text-decoration: none;
      padding: 12px 32px;
      font-size: 1rem;
      border-left: 4px solid transparent;
      transition: background 0.2s, border 0.2s, color 0.2s;
    }
    .sidebar .menu a.active, .sidebar .menu a:hover {
      background: #1e2227;
      color: #fff;
      border-left: 4px solid #007cba;
    }
    .main-content {
      flex: 1;
      padding: 40px 32px;
      background: #f4f6f9;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: flex-start;
    }
    .form-box {
      max-width: 450px;
      width: 100%;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.06);
      padding: 32px 24px;
      margin: 0 auto;
    }
    .form-box h2 {
      text-align: center;
      margin-bottom: 18px;
      font-size: 1.2rem;
      font-weight: 700;
      color: #23282d;
      letter-spacing: 1px;
    }
    .upload-area {
      border: 2px dashed #b3c6e0;
      border-radius: 8px;
      padding: 24px 0;
      text-align: center;
      margin-bottom: 18px;
      background: #f7faff;
      cursor: pointer;
      transition: border 0.2s;
    }
    .upload-area:hover { border-color: #1976d2; }
    .upload-area i { font-size: 2.5rem; color: #1976d2; }
    .form-group { margin-bottom: 16px; }
    label { display: block; margin-bottom: 6px; font-weight: 500; }
    input, textarea { width: 100%; padding: 8px 10px; border: 1px solid #b3c6e0; border-radius: 5px; font-size: 15px; }
    textarea { min-height: 70px; resize: vertical; }
    button { width: 100%; background: #1976d2; color: #fff; border: none; border-radius: 5px; padding: 10px; font-size: 16px; font-weight: 500; cursor: pointer; }
    button:hover { background: #1565c0; }
    .preview-img { display: block; margin: 10px auto 0 auto; max-width: 120px; max-height: 120px; border-radius: 8px; }
    @media (max-width: 900px) {
      .main-content { padding: 16px 4px; }
      .form-box { padding: 12px 2px; }
      .sidebar { width: 100px; }
    }
  </style>
</head>
<body>
<div class="container-admin">
  <div class="sidebar">
    <div class="brand">LINDA SALON</div>
    <nav class="menu">
      <ul>
        <li><a href="?page=dashboard"><i class="fas fa-tachometer-alt"></i> Menu Admin</a></li>
        <li><a href="?page=user"><i class="fas fa-users"></i> Data User</a></li>
        <li><a href="?page=product" class="active"><i class="fas fa-box"></i> Data Produk</a></li>
        <li><a href="?page=wedding"><i class="fas fa-gift"></i> Data Paket Pernikahan</a></li>
        <li><a href="?page=booking"><i class="fas fa-calendar"></i> Data Booking</a></li>
        <li style="margin-top:32px;"><a href="?page=logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
      </ul>
    </nav>
  </div>
  <div class="main-content">
    <div class="form-box">
      <h2>Tambah Produk</h2>
      <form method="POST" action="?page=product&action=save" enctype="multipart/form-data">
        <div class="upload-area" onclick="document.getElementById('foto-produk').click()">
          <i class="fas fa-upload"></i><br>
          <span>Upload Gambar</span>
          <input type="file" name="foto" id="foto-produk" accept="image/*" style="display:none" onchange="previewGambar(event)">
          <img id="preview-img" class="preview-img" style="display:none;" />
        </div>
        <div class="form-group">
          <label>Nama</label>
          <input type="text" name="name" required>
        </div>
        <div class="form-group">
          <label>Harga</label>
          <input type="number" name="price" required>
        </div>
        <div class="form-group">
          <label>Stok</label>
          <input type="number" name="stock" required>
        </div>
        <div class="form-group">
          <label>Deskripsi</label>
          <textarea name="description" required></textarea>
        </div>
    <button type="submit">Update</button>
</form> 
    </div>
  </div>
</div>
<script>
function previewGambar(event) {
  var input = event.target;
  var reader = new FileReader();
  reader.onload = function(){
    var img = document.getElementById('preview-img');
    img.src = reader.result;
    img.style.display = 'block';
  };
  if(input.files[0]) reader.readAsDataURL(input.files[0]);
}
</script>
</body>
</html> 