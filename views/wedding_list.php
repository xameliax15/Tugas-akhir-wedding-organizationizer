<style>
body { font-family: 'Roboto', Arial, sans-serif; background: #f4f6f9; }
.table-container {
  max-width: 800px;
  margin: 40px auto;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.08);
  padding: 32px 24px;
}
.table-container h1 { text-align: center; color: #1976d2; margin-bottom: 24px; }
table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 18px;
}
table th, table td {
  border: 1px solid #b3c6e0;
  padding: 10px 8px;
  text-align: center;
  font-size: 15px;
}
table th {
  background: #e3f0fc;
  color: #1976d2;
}
a.button {
  background: #1976d2;
  color: #fff;
  padding: 6px 14px;
  border-radius: 5px;
  text-decoration: none;
  font-weight: 500;
  transition: background 0.2s;
}
a.button:hover { background: #1565c0; }
</style>
<div class="table-container">
  <h1>Data Paket Wedding</h1>
  <a href="?page=wedding&action=add" class="button">Tambah Paket</a>
  <table>
    <tr>
      <th>Id</th>
      <th>Nama Paket</th>
      <th>Harga</th>
      <th>Deskripsi</th>
      <th>Aksi</th>
    </tr>
    <!-- Loop data wedding dari database -->
    <?php if (!empty($weddings)) foreach ($weddings as $wedding): ?>
    <tr>
      <td><?= $wedding['id'] ?></td>
      <td><?= $wedding['nama'] ?></td>
      <td><?= $wedding['harga'] ?></td>
      <td><?= $wedding['deskripsi'] ?></td>
      <td>
        <a href="?page=wedding&action=edit&id=<?= $wedding['id'] ?>" class="button">Edit</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </table>
</div> 