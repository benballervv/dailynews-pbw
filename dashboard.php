<?php

// ambil data foto profil user yg lagi login
$user_login = $_SESSION['username'];
$sql_user = "SELECT foto FROM user WHERE username = '$user_login'";
$query_user = mysqli_query($conn, $sql_user);
$data_user = mysqli_fetch_array($query_user);

$sql = "SELECT * FROM article";
$query = mysqli_query($conn, $sql);
$jumlah_article = ($query) ? mysqli_num_rows($query) : 0;

$sql2 = "SELECT * FROM gallery";
$query2 = mysqli_query($conn, $sql2);
$jumlah_gallery = ($query2) ? mysqli_num_rows($query2) : 0;
?>

<div class="text-center mb-4">
    <h2 class="fw-bold">selamat datang, <?= $_SESSION['username']; ?></h2>
    <img src="img/<?= $data_user['foto']; ?>" class="rounded-circle shadow" width="100" height="100" style="object-fit: cover;">
</div>

<div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center pt-4">
    <div class="col">
        <div class="card border border-primary mb-3 shadow-sm" style="max-width: 18rem;">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="p-3 text-primary">
                        <h5 class="card-title"><i class="bi bi-newspaper"></i> article</h5> 
                    </div>
                    <div class="p-3 text-center">
                        <span class="badge rounded-pill text-bg-primary fs-2"><?php echo $jumlah_article; ?></span>
                    </div> 
                </div>
            </div>
        </div>
    </div> 
    
    <div class="col">
        <div class="card border border-primary mb-3 shadow-sm" style="max-width: 18rem;">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="p-3 text-primary">
                        <h5 class="card-title"><i class="bi bi-camera"></i> gallery</h5> 
                    </div>
                    <div class="p-3 text-center">
                        <span class="badge rounded-pill text-bg-primary fs-2"><?php echo $jumlah_gallery; ?></span>
                    </div> 
                </div>
            </div>
        </div>
    </div> 
</div>