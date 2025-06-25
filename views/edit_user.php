<?php
// Pastikan variabel $user sudah terisi data user yang akan diedit
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit User</title>
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
    .edit-container { max-width: 400px; width:100%; background: #fff; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); padding: 32px 24px; margin: 0 auto; }
    .avatar { display: flex; justify-content: center; margin-bottom: 18px; }
    .avatar img { width: 100px; height: 100px; border-radius: 50%; border: 2px solid #eee; }
    .form-group { margin-bottom: 16px; }
    label { display: block; margin-bottom: 6px; font-weight: 500; }
    input, select { width: 100%; padding: 8px 10px; border: 1px solid #b3c6e0; border-radius: 5px; font-size: 15px; }
    button { width: 100%; background: #1976d2; color: #fff; border: none; border-radius: 5px; padding: 10px; font-size: 16px; font-weight: 500; cursor: pointer; }
    button:hover { background: #1565c0; }
    @media (max-width: 900px) {
      .main-content { padding: 16px 4px; }
      .edit-container { padding: 12px 2px; }
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
        <li><a href="?page=user" class="active"><i class="fas fa-users"></i> Data User</a></li>
        <li><a href="?page=product"><i class="fas fa-box"></i> Data Produk</a></li>
        <li><a href="?page=wedding"><i class="fas fa-gift"></i> Data Paket Pernikahan</a></li>
        <li><a href="?page=booking"><i class="fas fa-calendar"></i> Data Booking</a></li>
        <li style="margin-top:32px;"><a href="?page=logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
      </ul>
    </nav>
  </div>
  <div class="main-content">
    <div class="edit-container">
      <h2 style="text-align:center; margin-bottom:18px;">Edit / Lihat User</h2>
      <div class="avatar">
        <img src="assets/img/default-150x150.png" alt="Avatar">
      </div>
      <form method="POST" action="?page=update_user&id=<?= htmlspecialchars($user['id']) ?>">
        <div class="form-group">
          <label>Nama</label>
          <input type="text" name="nama" value="<?= htmlspecialchars($user['nama']) ?>" required>
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" placeholder="Kosongkan jika tidak diubah">
        </div>
        <div class="form-group">
          <label>Role</label>
          <select name="role" required>
            <option value="1" <?= $user['role'] == 1 ? 'selected' : '' ?>>Admin</option>
            <option value="2" <?= $user['role'] == 2 ? 'selected' : '' ?>>User</option>
          </select>
        </div>
        <button type="submit">Update</button>
      </form>
    </div>
  </div>
</div>
</body>
</html> 