<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas PBW</title>
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
  </style>
  </head>
<body> 
  <!-- navbar begin -->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <div class="container">
    <a class="navbar-brand" href="#">Tugas PBW</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto text-dark">
        <li class="nav-item"><a class="nav-link" href="#hero">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="#produk">Produk</a></li>
        <li class="nav-item"><a class="nav-link" href="#galeri">Galeri</a></li>
        <li class="nav-item"><a class="nav-link" href="#schedule">Schedule</a></li>
        <li class="nav-item"><a class="nav-link" href="#aboutme">About Me</a></li>
        <li class="nav-item">
          <a class="nav-link btn btn-outline-primary ms-lg-2" href="login.php">Login</a>
        </li> </ul>
    </div>
  </div>
</nav>
  <!-- navbar end -->

<!-- hero begin-->
  <section id="hero" class="text-center p-5 bg-info-subtle">
    <div class="container d-sm-flex flex-sm-row-reverse align-items-center">
      <img src="https://plus.unsplash.com/premium_photo-1682141028605-b2456e2bab14?auto=format&fit=crop&q=60&w=500" class="img-fluid" width="300" alt="banner tech">
      <div>
        <h1 class="fw-bold display-4">Teknologi Masa Depan</h1>
        <h4 class="lead display-6">Menampilkan gadget dan inovasi terbaru</h4>
        
        <!-- jam start -->
        <div class="mt-3">
            <span id="tanggal" class="h5 fw-bold text-secondary"></span> | 
            <span id="jam" class="h5 fw-bold text-primary"></span>
        </div>
        <!-- jam end -->
        </div>
    </div>
  </section>
  <!-- hero end -->

   <!-- produk begin -->
  <section id="produk" class="text-center p-5">
    <div class="container">
      <h1 class="fw-bold display-4 pb-3">Produk Kami</h1>
      <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
        <div class="col">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1531297484001-80022131f5a1?auto=format&fit=crop&q=60&w=500" class="card-img-top" alt="produk 1">
            <div class="card-body">
              <h5 class="card-title">Gadget 1</h5>
              <p class="card-text">Laptop untuk produktivitas tinggi dan multitasking lancar.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1616410011236-7a42121dd981?auto=format&fit=crop&q=60&w=500" class="card-img-top" alt="produk 2">
            <div class="card-body">
              <h5 class="card-title">Gadget 2</h5>
              <p class="card-text">Smartphone dengan desain elegan, performa cepat, dan kamera berkualitas tinggi.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- produk end -->

  <!-- galeri begin -->
  <section id="galeri" class="text-center p-5 bg-info-subtle">
    <div class="container">
      <h1 class="fw-bold display-4 pb-3">Galeri</h1>
      <div id="techCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://plus.unsplash.com/premium_photo-1681313824743-7b5a2a635938?auto=format&fit=crop&q=60&w=500" class="d-block w-100" alt="galeri 1">
          </div>
          <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1611186871348-b1ce696e52c9?auto=format&fit=crop&q=60&w=500" class="d-block w-100" alt="galeri 2">
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
  <!-- galeri end -->

  <!-- schedule begin -->
  <section id="schedule" class="text-center p-5">
    <div class="container">
      <h1 class="fw-bold display-4 pb-3">Schedule</h1>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-3">
        <div class="col"><div class="p-3 border bg-light">Membaca</div></div>
        <div class="col"><div class="p-3 border bg-light">Menulis</div></div>
        <div class="col"><div class="p-3 border bg-light">Diskusi</div></div>
        <div class="col"><div class="p-3 border bg-light">Olahraga</div></div>
      </div>
    </div>
  </section>
  <!-- schedule end -->

  <!-- about me begin-->
  <section id="aboutme" class="text-center p-5 bg-info-subtle">
    <div class="container">
      <h1 class="fw-bold display-4 pb-3">About Me</h1>
      <div class="accordion" id="aboutAccordion">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#univ">
              Universitas
            </button>
          </h2>
          <div id="univ" class="accordion-collapse collapse show" data-bs-parent="#aboutAccordion">
            <div class="accordion-body">
              Mahasiswa UDINUS fakultas Teknik Informatika
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#socmed">
              Social Media
            </button>
          </h2>
          <div id="socmed" class="accordion-collapse collapse" data-bs-parent="#aboutAccordion">
            <div class="accordion-body">
              Whatsapp, Instagram, X, Facebook, Youtube
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- about me end -->
  
  <!-- footer begin -->
  <footer class="text-center p-5 border-top">
    <div class="mb-3">
      <a href="#"><i class="bi bi-instagram fs-3 mx-2 text-dark"></i></a>
      <a href="#"><i class="bi bi-twitter fs-3 mx-2 text-dark"></i></a>
      <a href="#"><i class="bi bi-whatsapp fs-3 mx-2 text-dark"></i></a>
    </div>
    <div>&copy; 2026 Jevon Darrel Abhinaya</div>
  </footer>
  <!-- footer end -->

  <!-- back to top begin--> 
  <button id="backToTop" class="btn btn-danger rounded-circle shadow">
    <i class="bi bi-arrow-up"></i>
  </button>
  <!-- back to top end -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script type="text/javascript">
    /* display waktu begin */
    function tampilWaktu() {
      var waktu = new Date();
      var tanggal = waktu.getDate();
      var bulan = waktu.getMonth();
      var tahun = waktu.getFullYear();
      var jam = waktu.getHours();
      var menit = waktu.getMinutes();
      var detik = waktu.getSeconds();

      /* array bulan */
      var arrBulan = ["1","2","3","4","5","6","7","8","9","10","11","12"];

      var tanggal_full = tanggal + "/" + arrBulan[bulan] + "/" + tahun; 
      var jam_full = jam + ":" + menit + ":" + detik;

      document.getElementById("tanggal").innerHTML = tanggal_full;
      document.getElementById("jam").innerHTML = jam_full;
    } 

    setInterval(tampilWaktu, 1000);
    tampilWaktu(); 
    /* display waktu end */

    /* back to top */
    var btn = document.getElementById("backToTop");

    window.onscroll = function() {
      if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        btn.style.display = "block";
      } else {
        btn.style.display = "none";
      }
    };

    btn.onclick = function() {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    };
  </script>
  </body>
</html>