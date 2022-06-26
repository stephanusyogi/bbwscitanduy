<!doctype html>
<html>
  <head>
    <!-- Meta Tags -->
    <?php include 'meta.php'; ?>
    <link rel="icon" href="<?= base_url("assets/images/LogoSDA.jpg") ?>">
    <title>Balai Besar Wilayah Sungai Citanduy</title>
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet/less" type="text/css" href="<?= base_url("assets/css/styles.less") ?>" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url("assets/vendor/bootstrap-4.6.1/css/bootstrap.css") ?>">
    <!-- FontAwesom -->
    <link rel="stylesheet" href="<?= base_url("assets/vendor/fontawesome-free/css/all.min.css") ?>">
    <!-- Animate -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- JQUERY -->
    <script src="<?= base_url("assets/js/jquery-3.6.0.min.js") ?>"></script>
    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  </head>
  <body>
      <!-- Section TopBar -->
<section class="section-topbar container-fluid" id="topbar">
    <div class="row align-items-center py-2">
        <div class="col-md-6 col-sm-6 col-6">
            <a target="_blank" href="https://www.pu.go.id/">PUPR</a>
            <span> | </span>
            <a target="_blank" href="https://sda.pu.go.id/">DITJEN SDA</a>
        </div>
        <div class="col-md-6 col-sm-6 col-6 text-right">
            <span><i class="fas fa-calendar-alt"></i></span><span class="mb-0" id="date"></span><span class="mb-0 ml-1" id="time"></span>
            <!-- Date Time for TopBar -->
            <script src="<?= base_url("assets/js/dateandtime.js") ?>"></script>
        </div>
    </div>
</section>

<!-- Section Navbar -->
<section class="section-navbar">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url("assets/images/LogoSDA.JPG") ?>" width="60" height="60" class="d-inline-block align-top" alt="">
        </a>
        <a href="#" class="title-brand">
            <p class="mb-0">Kementerian Pekerjaan Umum dan Perumahan Rakyat Direktorat Jendral Sumber Daya Air</p>
            <h5 class="mb-0">Balai Besar Wilayah Sungai Citanduy</h5>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item nav-hover active">
                    <a class="nav-link" href="#"><i class="fas fa-home"></i></a>
                </li>
                <li class="nav-item nav-hover dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="Profil" role="button" data-toggle="dropdown" aria-expanded="false">
                    Profil
                    </a>
                    <div class="dropdown-menu" aria-labelledby="Profil">
                        <a class="dropdown-item" href="#">Sejarah Singkat</a>
                        <a class="dropdown-item" href="#">Visi Misi</a>
                        <a class="dropdown-item" href="#">Tugas & Fungsi</a>
                        <a class="dropdown-item" href="#">Wilayah Administratif</a>
                        <a class="dropdown-item" href="#">Struktur Organisasi</a>
                    </div>
                </li>
                <li class="nav-item nav-hover dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="Organisasi" role="button" data-toggle="dropdown" aria-expanded="false">
                    Organisasi
                    </a>
                    <div class="dropdown-menu" aria-labelledby="Organisasi">
                        <a class="dropdown-item" href="#">Bagian Tata Usaha</a>
                        <a class="dropdown-item" href="#">Bidang Perencanaan Umum</a>
                        <a class="dropdown-item" href="#">Bidang Pelaksanaan Sumber Air</a>
                        <a class="dropdown-item" href="#">Bidang Pelaksanaan Jaringan Pemanfaatan Air</a>
                        <a class="dropdown-item" href="#">Bidang Operasi & Pemeliharaan</a>
                    </div>
                </li>
                <li class="nav-item nav-hover dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="Berita" role="button" data-toggle="dropdown" aria-expanded="false">
                    Berita
                    </a>
                    <div class="dropdown-menu" aria-labelledby="Berita">
                        <a class="dropdown-item" href="#">Berita KemenPUPR</a>
                        <a class="dropdown-item" href="#">Berita SDA</a>
                        <a class="dropdown-item" href="#">Berita Balai</a>
                    </div>
                </li>
                <li class="nav-item nav-hover">
                    <a class="nav-link" href="#">Sistem Informasi SDA</a>
                </li>
                <li class="nav-item nav-hover">
                    <a class="nav-link" href="#">PSN</a>
                </li>
                <li class="nav-item nav-hover dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="Publikasi" role="button" data-toggle="dropdown" aria-expanded="false">
                    Publikasi
                    </a>
                    <div class="dropdown-menu" aria-labelledby="Publikasi">
                        <a class="dropdown-item" href="#">Majalah</a>
                        <a class="dropdown-item" href="#">Leflet/Booklet</a>
                        <a class="dropdown-item" href="#">Poster</a>
                    </div>
                </li>
                <li class="nav-item nav-hover">
                    <a class="nav-link" href="#">Galeri</a>
                </li>
                <li class="nav-item nav-hover dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="InformasiPublik" role="button" data-toggle="dropdown" aria-expanded="false">
                    Informasi Publik
                    </a>
                    <div class="dropdown-menu" aria-labelledby="InformasiPublik">
                        <a class="dropdown-item" href="#">e-PPID</a>
                        <a class="dropdown-item" href="#">e-Rekomtek</a>
                    </div>
                </li>
                <li class="nav-item nav-hover">
                    <a class="nav-link" href="#">TKPSDA</a>
                </li>
            </ul>
        </div>
    </nav>
</section>

<!-- Back to top button -->
<a id="btn-backtop"></a>
