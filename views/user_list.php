<h1>Data User</h1>
<table>
    <tr>
        <th>Id</th>
        <th>User Booking</th>
        <th>Nomor WhatsApp</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
    <!-- Loop data user dari database -->
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?= $user['id'] ?></td>
        <td><?= $user['nama'] ?></td>
        <td><?= $user['noWhatsApp'] ?? '' ?></td>
        <td><?= $user['status'] ?? '' ?></td>
        <td>
            <a href="?page=user&action=edit&id=<?= $user['id'] ?>">Edit</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table> 