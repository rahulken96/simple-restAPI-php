<?php

include 'api/ambil_data.php';
include 'body/header.php';

$dataJSONmhs = json_encode($dataMhs);
$objectMhs = json_decode($dataJSONmhs, true);
?>

<table class="table">
    <p>
        <a class="btn btn-success m-3" href="tambah.php">Buat Data Baru</a>
    </p>
    <thead>
        <tr>
            <th>id</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($objectMhs as $objMhs) : ?>
            <tr>
                <td><?= $objMhs['id'] ?></td>
                <td><?= $objMhs['nama'] ?></td>
                <td><?= $objMhs['nim'] ?></td>
                <td>
                    <form method="POST" action="api/hapus_data.php">
                        <a href="edit.php?id=<?= $objMhs['id'] ?>&nama=<?= $objMhs['nama'] ?>&nim=<?= $objMhs['nim'] ?>" class="btn btn-sm btn-outline-secondary">Edit Data</a>
                        <input type="hidden" name="id" value="<?= $objMhs['id'] ?>" />
                        <button class="btn btn-sm btn-outline-danger">Hapus Data</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include 'body/footer.php' ?>