<h1>Data Produk</h1>
<a href="?page=product&action=add">Tambah Produk</a>
<table>
    <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($products as $product): ?>
    <tr>
        <td><?= $product['id'] ?></td>
        <td><?= $product['name'] ?></td>
        <td><?= $product['price'] ?></td>
        <td><?= $product['stock'] ?></td>
        <td>
            <a href="?page=product&action=edit&id=<?= $product['id'] ?>">Edit</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table> 