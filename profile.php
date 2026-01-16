<?php
include "connect.php";
$u = $_SESSION['username'];
$row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM user WHERE username='$u'"));
?>

<div class="container mt-4">
    <div class="card border-0 shadow-sm p-4">
        <h4 class="fw-bold mb-4">management profile</h4>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label text-muted">username</label>
                <input type="text" class="form-control bg-light" value="<?= $u ?>" readonly>
            </div>
            <div class="mb-3">
                <label class="form-label text-muted">ganti password</label>
                <input type="password" name="p" class="form-control" placeholder="change password disini">
            </div>
            <div class="mb-3">
                <label class="form-label text-muted">ganti foto profil</label>
                <input type="file" name="f" class="form-control">
            </div>
            <div class="mb-4">
                <label class="form-label d-block text-muted">foto profil saat ini</label>
                <img src="img/<?= $row['foto'] ?>" class="rounded-circle border" width="100" height="100" style="object-fit: cover;">
            </div>
            <button type="submit" name="simpan" class="btn btn-primary w-100 fw-bold">simpan perubahan</button>
        </form>
    </div>
</div>

<?php
if(isset($_POST['simpan'])){
    // update password pakai md5 jika diisi
    if(!empty($_POST['p'])){
        $pw = md5($_POST['p']);
        mysqli_query($conn, "UPDATE user SET password='$pw' WHERE username='$u'");
    }

    // update foto jika di up
    if(!empty($_FILES['f']['name'])){
        $foto = $_FILES['f']['name'];
        move_uploaded_file($_FILES['f']['tmp_name'], "img/".$foto);
        mysqli_query($conn, "UPDATE user SET foto='$foto' WHERE username='$u'");
    }

    echo "<script>alert('berhasil update!'); window.location='admin.php?page=profile';</script>";
}
?>