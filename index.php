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
    <title>Lembaga Sertifikasi Profesi LSP P3 Bidang TIK lisensi BNSP</title>
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
  <main class="flex-shrink-0">
    <!-- Navbar Login -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="" width="35" class="d-inline-block align-text-top" /> LSP DIGITAL</a>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item align-self-center">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
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
    <!-- Jumbotron -->
    <div class="jumbotron text-center">
      <img src="img/jumbotron.jpg" alt="lsp digital" width="1370" height="400" />
    </div>
    <!-- Akhir Jumbotron -->
    
    <!-- Projects -->
    <section id="projects">
        <div class="container">
          <div class="row text-center mt-4 mb-1">
            <div class="col mb-3">
                <img src="img/logo.png" alt="LSP Digital" width="70">
                <h1>Lembaga Sertifikasi Profesi</h1>
                <h3>mengapa kami?</h3>
            </div>
          </div>
          <div class="row justify-content-center fs-5 text-center">
            <div class="col-md-8">
              <p>Karena komitmen kami untuk meningkatkan kebertrimaan Sertifikat Kompetensi oleh industri baik di tingkat nasional maupun internasional.</p>
              <a href="sertifikasi.php" class="btn btn-primary">Lihat Skema Sertifikasi</a>
            </div>
          </div>
          <div class="row gx-5 mt-5">
                <div class="col-md-4 mb-5">
                  <div class="card justify-content-md-center text-center" style="width: 18rem;">
                    <img src="img/1.png" class="card-img-top1" alt="Project 1">
                    <div class="card-body">
                      <h5 class="card-title">36 Skema Sertifikasi</h5>
                      <p class="card-text">Skema / Profesi / Jabatan / Pekerjaan di bidang-bidang strategis sektor Teknologi Informasi dan Komunikasi.</p>
                      <a href="#" class="card-link">Jadwal Sertifikasi</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-5">
                  <div class="card justify-content-md-center text-center" style="width: 18rem;">
                    <img src="img/2.png" class="card-img-top1" alt="Project 1">
                    <div class="card-body">
                      <h5 class="card-title">300++ Link DUDI</h5>
                      <p class="card-text">Perusahaan mitra LSP yang siap untuk menerima profesional bidang IT yang telah tersertifikasi, kompeten dan sesuai bidang keahliannya.</p>
                      <a href="#" class="card-link">Lowongan Pekerjaan</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-5">
                  <div class="card justify-content-md-center text-center" style="width: 18rem;">
                    <img src="img/3.png" class="card-img-top1" alt="Project 1">
                    <div class="card-body">
                      <h5 class="card-title">1000++ SDM Tersertifikasi</h5>
                      <p class="card-text">Daftar tenaga kerja profesional yang telah tersertifikasi oleh LSP Teknologi Digital. Siap untuk menjawab kebutuhan industri.</p>
                      <a href="#" class="card-link">Mencari Talenta</a>
                    </div>
                  </div>
                </div>
          </div>
  <!-- Akhir Projects -->

  <!-- Halaman Gabung -->
  <section id="gabung">
      <div class="container">
        <div class="row text-center mt-4 mb-1">
          <div class="col mb-3">
            <h1>Bergabunglah dengan LSP Teknologi Digital</h1>
            <h3>Jadilah Bagian dari kami</h3>
          </div>
        </div>
        <div class="card text-center mb-4">
          <div class="card-body">
            <h5 class="card-title">Asesor Kompetensi (Askom)</h5>
            <p class="card-text">Bergabunglah bersama LSP untuk menjadi 
              profesional yang telah memiliki lisensi atau sertifikat kompetensi 
              dari Badan Nasional Sertifikasi Profesi (BNSP) sehingga berwenang melakukan asesmen terhadap para asesi. <a href="#">Pelajari Lebih Lanjut</a></p>            
            <a href="#" class="btn btn-primary">Menjadi Askom</a>
          </div>
          <div class="card-footer text-muted">
            2 days ago
          </div>
        </div>
        <div class="card text-center mb-4">
          <div class="card-body">
            <h5 class="card-title">Pemegang Sertifikat (Asesi)</h5>
            <p class="card-text">Peserta uji kompetensi yang telah 
              melewati proses asesmen pada suatu skema sertifikasi dan telah diakui 
              kompetensinya sesuai dengan standar kompetensi. <a href="#">Pelajari Lebih Lanjut</a></p>            
            <a href="#" class="btn btn-primary">Menjadi Asesi</a>
          </div>
          <div class="card-footer text-muted">
            7 days ago
          </div>
        </div>
        <div class="card text-center mb-4">
          <div class="card-body">
            <h5 class="card-title">Tempat Uji Kompetensi (TUK)</h5>
            <p class="card-text">TUK mandiri, TUK sewaktu & TUK tempat kerja.
               Sebagai tempat uji yang sudah di verifikasi & di lisensi oleh 
               auditor lisensi dari LSP. <a href="#">Pelajari Lebih Lanjut</a></p>            
            <a href="#" class="btn btn-primary">Menjadi TUK</a>
          </div>
          <div class="card-footer text-muted">
            14 days ago
          </div>
        </div>
      </div>
  </section>
  <!-- Akhir Halaman Gabung -->

  <!-- Testimoni -->
  <section id="testi">
      <div class="container">
        <div class="row text-center mt-4 mb-1">
          <div class="col mb-3">
            <h1>Testimoni</h1>
            <h3>Inilah testimoni dari lulusan kami!</h3>
          </div>
        </div>
        <div class="card-group mb-5">
          <div class="card">
            <img src="img/testi/1.jpg" class="card-img-top" alt="testi">
            <div class="card-body">
              <h5 class="card-title">Roberto Carlo</h5>
              <p class="card-text">LSP Digital membantu saya dalam mengembangkan skill saya, terutama skill web development.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">23 September 2021</small>
            </div>
          </div>
          <div class="card">
            <img src="img/testi/1.jpg" class="card-img-top" alt="testi">
            <div class="card-body">
              <h5 class="card-title">Michael Jorda</h5>
              <p class="card-text">Dengan mengikuti pelatihan ini, saya bisa merubah usaha saya menjadi bentuk digital.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">16 September 2021</small>
            </div>
          </div>
          <div class="card">
            <img src="img/testi/1.jpg" class="card-img-top" alt="testi">
            <div class="card-body">
              <h5 class="card-title">Renato Albert</h5>
              <p class="card-text">Pelatihan yang diberikan sangat menyenangkan dan tidak membosankan. Materi yang diberikan juga mudah untuk diserap.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">9 September 2021</small>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Testimoni -->

  </main>
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
