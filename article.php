<?php
include "connect.php";
$sql = "SELECT * FROM article ORDER BY tanggal DESC";
$query = mysqli_query($conn, $sql);
?>

<div class="container-fluid mt-4">
    <div class="d-flex justify-content-between mb-3">
        <button class="btn btn-primary">+ Tambah Gadget Baru</button> 
        <div class="d-flex">
            <input type="text" class="form-control me-2" placeholder="Cari gadget...">
            <button class="btn btn-primary"><i class="bi bi-search"></i></button>
        </div>
    </div>

    <table class="table table-hover bg-white shadow-sm rounded">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Nama Gadget</th> <th>Deskripsi</th>  <th>Foto</th>       <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            while($row = mysqli_fetch_assoc($query)): 
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><b><?= $row['judul']; ?></b></td> <td><?= substr($row['isi'], 0, 50); ?>...</td> <td>
                    <img src="img/<?= $row['gambar']; ?>" width="80" class="rounded">
                </td>
                <td>
                    <button class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></button>
                    <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>