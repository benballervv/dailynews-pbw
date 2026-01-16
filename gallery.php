<?php
include "connect.php";
$sql = "SELECT * FROM gallery ORDER BY tanggal DESC";
$query = mysqli_query($conn, $sql);
?>

<div class="container-fluid mt-4">
    <div class="d-flex justify-content-between mb-3">
        <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalTambah">+ Tambah Gallery</button> 
        <div class="d-flex">
            <input type="text" id="cari_gallery" class="form-control me-2" placeholder="Cari gallery...">
            <button class="btn btn-secondary"><i class="bi bi-search"></i></button>
        </div>
    </div>

    <table class="table table-hover bg-white shadow-sm rounded">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Keterangan</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody id="tabel_gallery">
            <?php 
            $no = 1;
            while($row = mysqli_fetch_assoc($query)): 
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
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
<script>
$(document).ready(function(){
    function load_data(cari){
        $.ajax({
            url: "gallery_data.php",
            method: "POST",
            data: {cari: cari},
            success: function(data){
                $('#tabel_gallery').html(data);
            }
        });
    }

    //deteksi ngetik di input search
    $(document).on('keyup', '#cari_gallery', function(){
        var cari = $(this).val();
        load_data(cari);
    });
});
</script>