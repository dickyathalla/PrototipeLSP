<?php
  session_start();
  if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Visi & Misi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/custom.css" />
    <link type="image/x-icon" href="img/logo.png" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,300&display=swap" rel="stylesheet" />
  </head>

  <body id="home">
    <!-- Navbar Login -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="" width="35" class="d-inline-block align-text-top" /> LSP DIGITAL</a>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item align-self-center">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown align-self-center">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Profil </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item disabled" href="#">Lembaga</a></li>
              <li><a class="dropdown-item" href="visimisi.php">Visi Misi</a></li>
              <li><a class="dropdown-item disabled" href="#">Struktur Organisasi</a></li>
            </ul>
          </li>
          <li class="nav-item align-self-center">
            <a class="nav-link active" href="sertifikasi.php">Sertifikasi</a>
          </li>
          <li class="nav-item dropdown align-self-center">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Media </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="https://www.instagram.com/lsp.td/" target="_blank">Instagram</a></li>
              <li><a class="dropdown-item" href="https://www.facebook.com/LSP-Teknologi-Digital-106507851168889" target="_blank">Facebook</a></li>
              <li><a class="dropdown-item" href="https://www.youtube.com/channel/UCzzAznco5deIbDVZS4acb9w" target="_blank">Youtube</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown align-self-center">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Informasi </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="faq.php">FAQ</a></li>
              <li><a class="dropdown-item disabled" href="#">Event</a></li>
            </ul>
          </li>
          <?php if(isset($_SESSION['username'])){ ?>                                
              <li class="nav-link active"><a class="dropdown-item" href="index.php?logout='1'">Logout</a></li>
                <?php } else if(isset($_GET['logout'])){ 
                header("location: index.php"); ?>
              </li>
                <?php } else { ?>
              <li class="nav-item"><a class="nav-link active" href="login_register/register.php">Registrasi</a></li>
          <?php } ?>
        </ul>
      </div>
    </nav>
    <!-- Akhir Navbar Login -->

    <!-- Visi dan Misi -->
    <section id="visi">
        <div class="container mt-3">
            <div class="row">
                <div class="col-3">
                <div class="list-group">
                    <a href="#intro" class="list-group-item list-group-item-action">Intro</a>
                    <a href="#visi" class="list-group-item list-group-item-action">Visi</a>
                    <a href="#misi" class="list-group-item list-group-item-action">Misi</a>
                    <a href="#penyelenggara" class="list-group-item list-group-item-action">Penyelenggaraan Sertifikasi yang Kredibel</a>
                </div>
                </div>
                <div class="col-9">
                    <div class="row text-start mb-1">
                        <div class="col mb-3">
                        <h1 id="intro">Visi dan Misi</h1>
                            <img src="img/visimisi.png" alt="visi misi" width="720" height="500" />
                        <p>LSP Teknologi digital didirikan oleh Asosiasi, praktisi dan akademisi yang 
                            sudah berkecimpung lama di Sistem Sertifikasi Nasional. Pengalaman yang 
                            empiris dan harapan besar untuk mengantarkan Indonesia menjadi negara maju 
                            melalui SDM yang kompeten dan tersertifikasi, LSP TD akan terus komitmen, 
                            kontinyu dan konsisten menerapkan Sistem Manajemen Mutu pengelolaan Lembaga Sertifikasi. </p>
                        </div>
                        <h1 id="visi">Visi</h1>
                        <p>Menjadikan Lembaga Sertifikasi Profesi bidang teknologi informasi yang profesional, kredibel, 
                            akuntabel dan terkini dalam pengembangan dan perlindungan sumberdaya manusia</p>
                        <h1 id="misi">Misi</h1>
                        <ol>
                            <li class="ms-5">Menyenggarakan sertifikasi profesi/kompetensi bidang teknologi informasi 
                                yang di akui kredibilatsnya baik di dunia pendidikan maupun industri</li>
                            <li class="ms-5">Memiliki program kerja dan pengelolaan lembaga yang akuntabel dan dapat 
                                di pertanggungjawabkan dengan baik demi kepentingan pengembangan sumber daya manusia 
                                yang kompeten dan berakhlak mulia</li>
                            <li class="ms-5">Memastikan skema sertifikasi menggunakan standar kompetensi terkini dan
                                 dibutuhkan oleh dunia industri</li>
                            <li class="ms-5">Mengembangkan sumber daya manusia yang berkelanjutan dan berkesinambungan</li>
                            <li class="ms-5">Melindungi dan mengadvokasi tenaga kerja indonesia dari permasalahan hukum dan 
                                dari tenaga kerja asing yang masuk ke indonesia</li>
                        </ol>
                        <h1 id="penyelenggara">Penyelenggaraan Sertifikasi yang Kredibel</h1>
                        <ol>
                          <li class="ms-5">Pengembangan Website dan Sistem Sertifikasi Online</li>
                          <li class="ms-5">Pengembangan Mobile Apps Sistem Sertifikasi Online</li>
                          <li class="ms-5">Perjanjian kerjasama dengan lembaga diklat</li>
                          <li class="ms-5">Pembuatan sistem pengelolaan lembaga diklat</li>
                          <li class="ms-5">Pembuatan MUK oleh Asesor Kompetensi dan Instruktur pelatihan</li>
                          <li class="ms-5">Pembuatan portal terintegrasi untuk stakeholeder</li>
                          <li class="ms-5">Sosialisasi Sertifikasi ke berbagai daerah</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Visi dan Misi -->

    <!-- Footer -->
  <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between">
                    <div class="row row-cols-1 row-cols-md-3">
                        <div class="col-lg-auto h-100">
                            <div class="col mb-3">
                                <a class="text-decoration-none text-white" href="#"><i class="bi bi-geo-alt"></i> Jakarta : Pulogebang Indah Blok J11 No 34, Jakarta Timur, 021-22859837</a>
                            </div>
                            <div class="col mb-3">
                                <a class="text-decoration-none text-white" href="#"><i class="bi bi-envelope"></i> info@lspdigital.id</a>
                            </div>
                            <div class="col mb-3">
                                <a class="text-decoration-none text-white" href="#"><i class="bi bi-whatsapp"></i> 085329489247</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Tugas Sertifikasi VSGA 2021 - Muhammad Dicky Athalla</div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!">Privasi</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Kebijakan</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Kontak</a>
                    </div>
                </div>
            </div>
        </footer>
    <!-- Akhir Footer -->
  </body>
</html>