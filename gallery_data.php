<?php
include "connect.php";
$cari = isset($_POST['cari']) ? $_POST['cari'] : '';

$sql = "SELECT * FROM gallery WHERE judul LIKE '%$cari%' ORDER BY tanggal DESC";
$query = mysqli_query($conn, $sql);

$no = 1;
while ($row = mysqli_fetch_assoc($query)) {
?>
    <tr>
        <td><?= $no++; ?></td>
        <td>
            <b><?= $row['judul']; ?></b><br>
            <small class="text-muted">pada : <?= $row['tanggal']; ?></small><br>
            <small>oleh : <?= $row['username']; ?></small>
        </td>
        <td>
            <img src="img/<?= $row['gambar']; ?>" width="150" class="rounded shadow-sm">
        </td>
        <td>
            <button class="btn btn-success btn-sm rounded-circle"><i class="bi bi-pencil"></i></button>
            <button class="btn btn-danger btn-sm rounded-circle"><i class="bi bi-x-circle"></i></button>
        </td>
    </tr>
<?php } ?>