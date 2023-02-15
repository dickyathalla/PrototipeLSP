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
    <title>FAQ</title>
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

    <!-- About -->
    <section id="judulfaq">
      <div class="container">
        <div class="row text-center mt-4 mb-1">
          <div class="col mb-3">
            <h1>FAQ</h1>
            <h3>Frequently Asked Questions</h3>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-8">
            <p>Berikut adalah pertanyaan yang sering ditanyakan pada kami.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir About -->

    <!-- FAQ -->
    <section id="faq">
      <div class="row gx-5 mt-4 mb-1">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
              Bagaimanakah proses pendaftaran Sertifikasi di LSP Teknologi Digital?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Anda hanya perlu mengisi formulir Permohonan dari menu Registrasi atau langsung ke alamat.</strong> <a href="https://sertifikasi.lspdigital.id/"> LINK PERMOHONAN </a>
                <ol>
                  <li>Siapkan Persyaratan dasar dan bukti kompetensi dalam bentuk gambar(jpg atau png) atau dokumen(pdf)</li>
                  <li>Step 1 Isi biodata pemohon</li>
                  <li>Step 2 Upload Persaratan dasar dan bukti kompetensi</li>
                  <li>Step 3 Asesmen Mandiri, pastikan anda sudah mengakui diri kompeten dan Pendaftaran Selesai</li>
                </ol>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Syarat Pendirian Tempat Uji Kompetensi - TUK ?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Tempat Uji Kompetensi atau TUK adalah tempat yang disediakan oleh penyelenggara uji kompetensi untuk melakukan proses asesmen langsung.</strong> 
                Tata cara pengajuan dan proses verifiksi TUK dapat dilihat di artikel ini <a href="https://lspdigital.id/article/21/permohononan-pembentukan-tempat-uj-kompetensi-lsp-teknologi-digital">Artikel TUK</a> .
                  Proses pembentukan TUK tidak di pungut biaya. Karena LSP menerapkan Metode jarak jauh dan persyaratan teknis TUK juga tidak terlalu rumit seperti pada sektor lainnya.
              </div>
            </div>
          </div>  
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
              Bagaimana prosedur menjadi asesor kompetensi di LSP?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Mengikuti pelatihan metodologi sebagai asesor kompetensi yang di selenggarakan oleh LSP yang telah disetujui oleh BNSP.</strong> 
                Sudah memiliki sertifikat teknis yang diterbitkan oleh LSP Teknologi Digital. Berikut <a href="https://lspdigital.id/event/5/pelatihan-asesor-kompetensi-bnsp-bidang-digital-marketing-dan-networking">LINK Detail</a> nya.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir FAQ -->

    <!-- Tanya -->
    <section id="tanya">
        <div class="container">
          <div class="row text-center mt-5 mb-2">
            <div class="col">
              <h1>Ada yang ingin kamu tanyakan?</h1>
              <h3>Sampaikan pertanyaanmu disini!</h3>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-6">
              <form>
                <div class="mb-3">
                  <label for="name" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="name" aria-describedby="name" required>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                  <label for="pesan" class="form-label">Pertanyaan</label>
                  <textarea class="form-control" id="pesan" rows="5"></textarea required>
                </div>
                <button type="submit" class="btn btn-primary text-white text-center mb-5">Kirim</button>
              </form>
            </div>
          </div>
        </div>
      </section>
  <!-- Akhir Tanya -->

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