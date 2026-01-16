<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas PBW - Future Tech</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  
  <style>
    #backToTop {
      display: none; 
      position: fixed; 
      bottom: 20px;
      right: 30px;
      z-index: 99;
    }
    .card-img-top {
      height: 200px;
      object-fit: cover;
    }
  </style>
</head>
<body> 
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold text-primary" href="#">Tugas PBW</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#hero">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="#produk">Produk</a></li>
          <li class="nav-item"><a class="nav-link" href="#galeri">Galeri</a></li>
          <li class="nav-item"><a class="nav-link" href="#schedule">Schedule</a></li>
          <li class="nav-item"><a class="nav-link" href="#aboutme">About Me</a></li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-primary ms-lg-2 px-3" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section id="hero" class="text-center p-5 bg-info-subtle">
    <div class="container d-sm-flex flex-sm-row-reverse align-items-center">
      <img src="https://plus.unsplash.com/premium_photo-1682141028605-b2456e2bab14?auto=format&fit=crop&q=60&w=500" class="img-fluid rounded shadow" width="300" alt="banner tech">
      <div class="text-sm-start mt-3 mt-sm-0">
        <h1 class="fw-bold display-4">Teknologi Masa Depan</h1>
        <h4 class="lead display-6">Menampilkan gadget dan inovasi terbaru</h4>
        <div class="mt-3">
            <span id="tanggal" class="h5 fw-bold text-secondary"></span> | 
            <span id="jam" class="h5 fw-bold text-primary"></span>
        </div>
      </div>
    </div>
  </section>
  <section id="produk" class="text-center p-5">
    <div class="container">
      <h1 class="fw-bold display-4 pb-3">Produk Kami</h1>
      <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
        
        <?php
        // ambil data dari tabel article
        $sql = "SELECT * FROM article ORDER BY tanggal DESC";
        $hasil = $conn->query($sql);

        // loop untuk mendisplay semua gadget di database
        while($row = $hasil->fetch_assoc()){
        ?>
        <div class="col">
          <div class="card h-100 shadow-sm border-info">
            <?php
            // verify apakah ada gambar di folder img
            $gambar = "https://via.placeholder.com/500x300?text=No+Image";
            if ($row["gambar"] != '' && file_exists('img/' . $row["gambar"])) {
                $gambar = 'img/' . $row["gambar"];
            }
            ?>
            <img src="<?= $gambar ?>" class="card-img-top" alt="<?= $row["judul"] ?>">
            <div class="card-body">
              <h5 class="card-title fw-bold text-primary"><?= $row["judul"] ?></h5>
              <p class="card-text text-muted"><?= $row["isi"] ?></p>
            </div>
            <div class="card-footer bg-transparent border-0 text-secondary">
              <small><i class="bi bi-calendar-event"></i> <?= $row["tanggal"] ?></small>
            </div>
          </div>
        </div>
        <?php } ?>

      </div>
    </div>
  </section>
  <section id="galeri" class="text-center p-5 bg-info-subtle">
    <div class="container">
      <h1 class="fw-bold display-4 pb-3">Galeri</h1>
      <div id="techCarousel" class="carousel slide shadow rounded overflow-hidden" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php
            $sql_gal = "SELECT * FROM gallery ORDER BY tanggal DESC";
            $res_gal = $conn->query($sql_gal);
            $aktif = "active";
            while($row = $res_gal->fetch_assoc()){ 
 			 ?>
 			 <div class="carousel-item <?= $aktif ?>">
   				 <img src="img/<?= $row['gambar'] ?>" class="d-block w-100" alt="...">
   				 <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
   				   <h5><?= $row['judul'] ?></h5>
			    </div>
 			 </div>
            <?php $aktif = ""; } ?> </div>
          </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#techCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#techCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
    </div>
  </section>
  <section id="schedule" class="text-center p-5">
    <div class="container">
      <h1 class="fw-bold display-4 pb-3">Schedule</h1>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-3">
        <div class="col"><div class="p-3 border bg-light shadow-sm rounded">Membaca</div></div>
        <div class="col"><div class="p-3 border bg-light shadow-sm rounded">Menulis</div></div>
        <div class="col"><div class="p-3 border bg-light shadow-sm rounded">Diskusi</div></div>
        <div class="col"><div class="p-3 border bg-light shadow-sm rounded">Olahraga</div></div>
      </div>
    </div>
  </section>

  <section id="aboutme" class="text-center p-5 bg-info-subtle">
    <div class="container">
      <h1 class="fw-bold display-4 pb-3">About Me</h1>
      <div class="accordion shadow-sm" id="aboutAccordion">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#univ">
              Universitas
            </button>
          </h2>
          <div id="univ" class="accordion-collapse collapse show" data-bs-parent="#aboutAccordion">
            <div class="accordion-body text-start">
              Mahasiswa <strong>UDINUS</strong> fakultas Teknik Informatika.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <footer class="text-center p-5 border-top bg-white">
    <div class="mb-3">
      <a href="#"><i class="bi bi-instagram fs-3 mx-2 text-primary"></i></a>
      <a href="#"><i class="bi bi-twitter fs-3 mx-2 text-info"></i></a>
      <a href="#"><i class="bi bi-whatsapp fs-3 mx-2 text-success"></i></a>
    </div>
    <div class="fw-bold">&copy; 2026 Jevon Darrel Abhinaya</div>
  </footer>

  <button id="backToTop" class="btn btn-primary rounded-circle shadow">
    <i class="bi bi-arrow-up"></i>
  </button>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script type="text/javascript">
    function tampilWaktu() {
      var waktu = new Date();
      var arrBulan = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
      document.getElementById("tanggal").innerHTML = waktu.getDate() + " " + arrBulan[waktu.getMonth()] + " " + waktu.getFullYear();
      document.getElementById("jam").innerHTML = waktu.getHours().toString().padStart(2, '0') + ":" + waktu.getMinutes().toString().padStart(2, '0') + ":" + waktu.getSeconds().toString().padStart(2, '0');
    } 
    setInterval(tampilWaktu, 1000);
    tampilWaktu(); 

    var btn = document.getElementById("backToTop");
    window.onscroll = function() {
      if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) btn.style.display = "block";
      else btn.style.display = "none";
    };
    btn.onclick = function() { window.scrollTo({ top: 0, behavior: 'smooth' }); };
  </script>
</body>
</html>