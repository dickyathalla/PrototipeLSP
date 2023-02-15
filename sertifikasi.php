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
    <title>Tempat Uji Kompetensi</title>
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

    <!-- Skema Pelatihan -->
    <section id="about">
      <div class="container">
        <div class="row text-center mt-4 mb-1">
          <div class="col mb-3">
            <h1>Skema Sertifikasi</h1>
            <h3>Silahkan Pilih Skema Sertifikasi yang anda inginkan</h3>
          </div>
        </div>
        <div class="row gx-5">
            <div class="col-lg-4 mb-2">
              <div class="card justify-content-md-center text-center" style="width: 18rem;">
                <img src="img/ser/1.png" class="card-img-top" alt="Project 1">
                <div class="card-body">
                  <h5 class="card-title">Digital Marketing</h5>
                  <p class="card-text">Melakukan aktivitas promosi untuk sebuah produk atau brand dengan menggunakan media Digital sebagai platform.</p>
                  <a href="#" class="btn btn-primary">Daftar</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-2">
              <div class="card justify-content-md-center text-center" style="width: 18rem;">
                <img src="img/ser/2.png" class="card-img-top" alt="Project 1">
                <div class="card-body">
                  <h5 class="card-title">Network Administrator Muda</h5>
                  <p class="card-text">Profesi terkait skema ini antara lain Network Engineer, Sys admin, IT Network, IT Infrastructure dsb.</p>
                  <a href="#" class="btn btn-primary">Daftar</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-2">
              <div class="card justify-content-md-center text-center" style="width: 18rem;">
                <img src="img/ser/3.png" class="card-img-top" alt="Project 1">
                <div class="card-body">
                  <h5 class="card-title">ICT Project Manager</h5>
                  <p class="card-text">Profesi terkait ini antara lain Project dan Supervisor Manager, Business Development Manager, dan lain sebagainya.</p>
                  <a href="#" class="btn btn-primary">Daftar</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-2">
              <div class="card justify-content-md-center text-center" style="width: 18rem;">
                <img src="img/ser/4.png" class="card-img-top" alt="Project 1">
                <div class="card-body">
                  <h5 class="card-title">Desainer Multimedia Muda</h5>
                  <p class="card-text">Profesi yang terkait ini antara lain Multimedia Designer Motion Graphic, Editor Video, Multimedia Studio.</p>
                  <a href="#" class="btn btn-primary">Daftar</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-2">
              <div class="card justify-content-md-center text-center" style="width: 18rem;">
                <img src="img/ser/5.png" class="card-img-top" alt="Project 1">
                <div class="card-body">
                  <h5 class="card-title">Junior Web Developer</h5>
                  <p class="card-text">Profesi terkait skema ini antara lain Web Programmer, Mobile programmer, Front end Programmer.</p>
                  <a href="#" class="btn btn-primary">Daftar</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-2">
              <div class="card justify-content-md-center text-center" style="width: 18rem;">
                <img src="img/ser/6.png" class="card-img-top" alt="Project 1">
                <div class="card-body">
                  <h5 class="card-title">Operator Komputer Muda</h5>
                  <p class="card-text">Operator yang bertanggung jawab atas semua peralatan yg ada dalam sistem komputerisasi. Skema dasar pengoperasian komputer.</p>
                  <a href="#" class="btn btn-primary">Daftar</a>
                </div>
              </div>
            </div> 
      </div>
    </section>
    <!-- Akhir Skema Pelatihan -->

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row text-center mt-4 mb-1">
          <article>
            <header class="mb-4">
              <h1 class="profile-title" class="fw-bolder mb-1">Lokasi</h1>
              <h3>BPSDMP KOMINFO Surabaya</h3>
              <p>Jl. Raya Ketajen No.36, Ketajen, Kec. Gedangan, Kabupaten Sidoarjo, Jawa Timur 61254</p>
            </header>
            <section class="mb-8">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.709669814941!2d112.73138161419577!3d-7.386396094670289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e489f526de1b%3A0x6a6ab0bf3345a1ae!2sBPSDMP%20KOMINFO%20Surabaya!5e0!3m2!1sid!2sid!4v1632753688618!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </section>
          </article>
        </div>
      </div>
    </section>
    <!-- Akhir About -->

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