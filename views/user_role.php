<?php
// Pastikan variabel $user sudah terisi data user yang akan diubah rolenya
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Role User</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    body { background: #f4f6f9; font-family: 'Roboto', Arial, sans-serif; }
    .edit-container { max-width: 400px; margin: 40px auto; background: #fff; border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); padding: 32px 24px; }
    .avatar { display: flex; justify-content: center; margin-bottom: 18px; }
    .avatar img { width: 100px; height: 100px; border-radius: 50%; border: 2px solid #eee; }
    .form-group { margin-bottom: 16px; }
    label { display: block; margin-bottom: 6px; font-weight: 500; }
    input, select { width: 100%; padding: 8px 10px; border: 1px solid #b3c6e0; border-radius: 5px; font-size: 15px; }
    button { width: 100%; background: #1976d2; color: #fff; border: none; border-radius: 5px; padding: 10px; font-size: 16px; font-weight: 500; cursor: pointer; }
    button:hover { background: #1565c0; }
  </style>
</head>
<body>
  <div class="edit-container">
    <h2 style="text-align:center; margin-bottom:18px;">Ubah Role User</h2>
    <div class="avatar">
      <img src="assets/img/default-150x150.png" alt="Avatar">
    </div>
    <form method="POST" action="?page=update_user_role&id=<?= htmlspecialchars($user['id']) ?>">
      <div class="form-group">
        <label>Nama</label>
        <input type="text" value="<?= htmlspecialchars($user['nama']) ?>" disabled>
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
</body>
</html> 