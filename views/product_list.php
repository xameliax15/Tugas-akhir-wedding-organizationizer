<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Produk - LINDA SALON</title>
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
    }
    .data-box {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.06);
      padding: 32px 24px 24px 24px;
      max-width: 1100px;
      margin: 0 auto;
    }
    .data-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 18px;
    }
    .data-header h2 {
      font-size: 1.2rem;
      font-weight: 700;
      color: #23282d;
      margin: 0;
      letter-spacing: 1px;
    }
    .data-header .actions {
      display: flex;
      gap: 10px;
    }
    .data-header select, .data-header input[type='text'] {
      padding: 6px 10px;
      border: 1px solid #b3c6e0;
      border-radius: 5px;
      font-size: 15px;
      background: #f7faff;
    }
    .data-header button, .data-header a.tambah-btn {
      background: #1976d2;
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 7px 16px;
      font-size: 15px;
      font-weight: 500;
      cursor: pointer;
      transition: background 0.2s;
      text-decoration: none;
      display: inline-block;
    }
    .data-header button:hover, .data-header a.tambah-btn:hover { background: #1565c0; }
    table {
      width: 100%;
      border-collapse: collapse;
      background: #fff;
      margin-bottom: 18px;
    }
    th, td {
      border: 1px solid #b3c6e0;
      padding: 10px 8px;
      text-align: center;
      font-size: 15px;
    }
    th {
      background: #f4f6f9;
      color: #23282d;
      font-weight: 600;
    }
    td { background: #fff; }
    .pagination {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      gap: 6px;
      font-size: 15px;
      color: #888;
    }
    .pagination button {
      background: #fff;
      border: 1px solid #b3c6e0;
      border-radius: 4px;
      padding: 2px 8px;
      cursor: pointer;
      font-size: 15px;
      transition: background 0.2s;
    }
    .pagination button.active, .pagination button:hover {
      background: #1976d2;
      color: #fff;
      border-color: #1976d2;
    }
    @media (max-width: 900px) {
      .main-content { padding: 16px 4px; }
      .data-box { padding: 12px 2px; }
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
    <div class="data-box">
      <div class="data-header">
        <h2>Data Produk</h2>
        <div class="actions">
          <a href="?page=product&action=add" class="tambah-btn">Tambah</a>
          <select id="aksi-produk">
            <option>Pilih Aksi</option>
            <option value="edit">Edit</option>
            <option value="delete">Hapus</option>
          </select>
          <button id="jalankan-produk" style="margin-left:8px;">Jalankan</button>
        </div>
      </div>
<table>
    <tr>
          <th><input type="checkbox"></th>
        <th>Id</th>
        <th>Nama</th>
        <th>Stok</th>
    </tr>
    <?php foreach ($products as $product): ?>
    <tr>
          <td><input type="checkbox" value="<?= $product['id'] ?>"></td>
          <td><?= htmlspecialchars($product['id']) ?></td>
          <td><?= htmlspecialchars($product['name']) ?></td>
          <td><?= htmlspecialchars($product['stock']) ?></td>
    </tr>
    <?php endforeach; ?>
</table> 
      <div class="pagination">
        <span>1-<?= count($products) ?> of <?= count($products) ?> items</span>
        <button class="active">1</button>
        <button disabled>2</button>
        <button disabled>3</button>
        <button disabled>></button>
      </div>
    </div>
  </div>
</div>
<script>
document.getElementById('jalankan-produk').addEventListener('click', function() {
  var aksi = document.getElementById('aksi-produk').value;
  var checkboxes = document.querySelectorAll('table input[type="checkbox"]:not([disabled])');
  var checked = [];
  checkboxes.forEach(function(cb, idx) {
    if (cb.closest('tr').rowIndex !== 0 && cb.checked) {
      var id = cb.closest('tr').children[1].textContent.trim();
      checked.push(id);
    }
  });
  if (checked.length !== 1) {
    alert('Pilih tepat satu produk terlebih dahulu!');
    return;
  }
  var productId = checked[0];
  if (aksi === 'edit') {
    window.location.href = '?page=product&action=edit&id=' + productId;
  } else if (aksi === 'delete') {
    if (confirm('Yakin ingin menghapus produk ini?')) {
      window.location.href = '?page=product&action=delete&id=' + productId;
    }
  } else {
    alert('Pilih aksi terlebih dahulu!');
  }
});
</script>
</body>
</html> 