<?php 
include "ceklogin.php";
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Buat Pesanan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assetspesanan/img/logo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assetspesanan/vendor/aos/aos.css" rel="stylesheet">
  <link href="assetspesanan/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assetspesanan/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assetspesanan/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assetspesanan/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assetspesanan/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assetspesanan/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assetspesanan/img/logo.png" alt="">
        <span>NikahYuk</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="dashboard.php">Beranda</a></li>
          <li><a class="nav-link scrollto" href="dashboard.php#katalog">Katalog</a></li>
          <li><a class="nav-link scrollto" href="dashboard.php#komentar">Komentar</a></li>
          <li><a class="nav-link scrollto" href="dashboard.php#pertanyaan">Pertanyaan</a></li>

          <li class="dropdown"><a href="buatpesanan.php"><span>Pemesanan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Status Pesanan</a></li>
              <li><a href="#buatpesanan">Buat Pesanan</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="statuspembayaran.php"><span>Pembayaran</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Info Rekening</a></li>
              <li><a href="#">Upload Bukti Pembayaran</a></li>
              <li><a href="#">Status Pembayaran</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span><?php echo $_SESSION['username'] ?></span></a>
            <ul>
              <li>
                <a href="">
                  <?php 
                    $sql = "SELECT email FROM users WHERE username='{$_SESSION['username']}'";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0){
                        $row = mysqli_fetch_assoc($result);
                        $email = $row['email'];
                        echo $email;
                    } else {
                        echo "Username tidak ditemukan.";
                    }
                  ?>
                </a>
              </li>
              <li><a href="logout.php">Log-out</a></li>
            </ul>
          </li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Beranda</a></li>
          <li>Pemesanan</li>
          <li>Buat Pesanan</li>
        </ol>
        <h2>Buat Pesanan</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Pesanan Section ======= -->
    <section id="pesanan-details" class="pesanan-details">
      <div class="container">
        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="pesanan-info">
              <h3>Detail Pesanan</h3>
              <ul>
                <li><a href="statuspesanan.php"><strong>Status Pesanan</strong></a></li>
                <li><a href="#buatpesanan"><strong>Buat Pesanan</strong></a></li>
              </ul>
            </div> 
          </div>


          <div class="col-lg-8">

            <div class="pesanan-form">
            <form enctype="multipart/form-data" class="form" action="prosespesanan.php" method="POST" id="buatpesanan">

              <div class="row">
                <div class="input-group">
                  <label>Type Desain</label>
                  <select class="input-control" name="desain">
                    <option value="Classic">Classic</option>
                    <option value="Blue Flower">Blue Flower</option>
                    <option value="Golden">Golden</option>
                  </select>
                </div>
              </div>

              <div class="row">
                  <div class="input-group">
                  <label>Nama Pengantin Pria</label>
                  <input type="text" placeholder="Nama Lengkap : Lee Jongsuk" class="input-control" name="nama_pengantin_pria">
                  </div> 
              </div>

              <div class="row">
                <div class="input-group">
                  <Label>Nama Pengantin Wanita</Label>
                  <input type="text" placeholder="Nama Lengkap : Im Yoon Ah" class="input-control" name="nama_pengantin_wanita">
                </div> 
              </div>

              <div class="row">
                <div class="input-group">
                  <label>Nomor HP/Whatsapp</label>
                  <input type="text" placeholder="Nomor : 0829-0080-0705" class="input-control" name="nomor_hp">
                </div> 
              </div>

              <div class="row">
                <div class="input-group">
                  <label>Lokasi Acara</label>
                  <input type="text" placeholder="Lokasi Acara" class="input-control" name="lokasi_acara">
                </div> 
              </div>

              <div class="row">
                <div class="input-group">
                  <label>Waktu Acara</label>
                  <input type="text" placeholder="Waktu Acara : 08:00 - selesai" class="input-control" name="waktu_acara">
                </div>  
              </div>

              <div class="row">
                <div class="input-group">
                  <label for="date">Tanggal Acara</label>
                  <input type="date" class="input-control" name="tanggal_acara">
                </div> 
              </div>

              <div class="row">
                <div class="input-group">
                  <label>Nama Orang Tua Pengantin Pria</label>
                </div>
                <div class="input-group w50">
                  <input type="text" placeholder="Nama Ayah : Abdul" class="input-control" name="nama_ayah_pengantin_pria">
                </div>
                <div class="input-group w50">
                  <input type="text" placeholder="Nama Ibu : Maria" class="input-control" name="nama_ibu_pengantin_pria">
                </div>
              </div>

              <div class="row">
                <div class="input-group">
                  <label>Nama Orang Tua Pengantin Wanita</label>
                </div>
                <div class="input-group w50">
                  <input type="text" placeholder="Nama Ayah : Situmorang" class="input-control" name="nama_ayah_pengantin_wanita">
                </div>
                <div class="input-group w50">
                  <input type="text" placeholder="Nama Ibu : Riana" class="input-control" name="nama_ibu_pengantin_wanita">
                </div>
              </div>

              <div class="row">
                <div class="input-group">
                  <label>Ayat Kitab Suci</label>
                  <textarea placeholder="Ayat Kitab Suci : “Wanita yang baik adalah untuk lelaki yang baik. Lelaki yang baik untuk wanita yang baik pula (begitu pula sebaliknya). Bagi mereka ampunan dan reski yang melimpah (yaitu Surga).” (QS. An Nuur (24):26)" class="input-control" name="ayat_kitab_suci"></textarea>
                </div>
              </div>



              <div class="row">
                <div class="input-group w50">
                  <label>Foto Pengantin Pria</label>
                  <input type="file"  name="foto_pengantin_pria" class="input-control">
                </div>
                <div class="input-group w50">
                  <label>Foto Pengantin Wanita</label>
                  <input type="file"  name="foto_pengantin_wanita" class="input-control">
                </div>
              </div>     

              <div class="row">
                <div class="input-group w50">
                  <label>Foto Prewedding 1</label>
                  <input type="file"  name="foto_prewedd_satu" class="input-control">
                </div>
                <div class="input-group w50">
                  <label>Foto Prewedding 2</label>
                  <input type="file"  name="foto_prewedd_dua" class="input-control">
                </div>
              </div>

              <div class="row">
                <div class="input-group w50">
                  <label>Foto Galeri 1</label>
                  <input type="file"  name="foto_galeri_satu" class="input-control">
                </div>
                <div class="input-group w50">
                  <label>Foto Galeri 2</label>
                  <input type="file"  name="foto_galeri_dua" class="input-control">
                </div>
              </div>

              <div class="row">
                <div class="input-group w50">
                  <label>Foto Galeri 3</label>
                  <input type="file"  name="foto_galeri_tiga" class="input-control">
                </div>
                <div class="input-group w50">
                  <label>Foto Galeri 4</label>
                  <input type="file"  name="foto_galeri_empat" class="input-control">
                </div>
              </div>

              <div class="row">
                <div class="input-group">
                  <label>Nomor Rekening</label>
                </div>
                <div class="input-group w50">
                  <input type="text" placeholder="No.Rek Pengantin Pria" class="input-control" name="norek_pengantin_pria">
                </div>
                <div class="input-group w50">
                  <input type="text" placeholder="No.Rek Pengantin Wanita" class="input-control" name="norek_pengantin_wanita">
                </div>
              </div>     

              <div class="row">
                <div class="input-group">
                  <label>Lagu</label>
                  <input type="text" placeholder="Judul Lagu : It's You - Sezairi" class="input-control" name="lagu" >
                </div>
              </div>
                    

              <div class="row">
                <div class="input-group">
                  <button type="submit" class="btn-1">Kirim</button>
                </div>
              </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- End Pesanan Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assetspesanan/img/logo.png" alt="">
              <span>NikahYuk</span>
            </a>
            <p>Nikahyuk Membantu Anda Membagikan Kabar Bahagia dengan Undangan Pernikahan Digital yang Menarik.</p>
            <div class="social-links mt-3">
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="https://wa.me/6281358008183" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Tautan Navigasi</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Beranda</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Mengapa Ny</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Katalog</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Pertanyaan</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Komentar</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Layanan Kami</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Undangan Digital</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Desain & Layout Kustom</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Kolaborasi Tim</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Kontak Kami</h4>
            <p>
              Bandung<br>
              Jawa Barat<br>
              Indonesia <br><br>
              <strong>Phone:</strong> +62 8235 8008 183<br>
              <strong>Email:</strong> nikahyuk@gmail.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>NikahYuk</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Designed by NikahYuk
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assetspesanan/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assetspesanan/vendor/aos/aos.js"></script>
  <script src="assetspesanan/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assetspesanan/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assetspesanan/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assetspesanan/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assetspesanan/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assetspesanan/js/main.js"></script>

</body>

</html>