<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <!-- library animasi css -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- my css -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/font-family.css">

  <title>Hello, world!</title>
</head>

<body>
  <div class="wrap">

    <!-- FIXED navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" data-aos="fade-down" data-aos-duration="1000">
      <a class="navbar-brand" href="#"><img src="img/Logo1.png" width="45px" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Beranda</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProfile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Profile
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownProfile">
              <a class="dropdown-item" href="profile/tentang_sekolah.php">Tentang Sekolah</a>
              <a class="dropdown-item" href="profile/tentang_kepala_sekolah.php">Kepala Sekolah</a>
              <a class="dropdown-item" href="profile/sejarah_sekolah.php">Sejarah Sekolah</a>
              <a class="dropdown-item" href="profile/visi_misi.php">Visi, Misi dan Filosofi Pendidikan</a>
              <a class="dropdown-item" href="#">Jam Sekolah dan Kalender Tahun Pendidikan</a>
              <a class="dropdown-item" href="profile/prestasi_akademik.php">Prestasi Akademik</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Manajemen
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="manajemen/kurikulum.php">Kurikulum</a>
              <a class="dropdown-item" href="manajemen/sarana_prasarana.php">Sarana dan Prasarana</a>
            </div>
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownData" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Data
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownData">
                    <a class="dropdown-item" href="http://localhost/search_ajaxfin/index.php">Data Siswa</a>
                    <a class="dropdown-item" href="http://localhost/SDNEGERI5MENTENG/datasiswa-master/Pendaftarguru.php">Data Guru</a>
                </div>
            </li>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Info
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Agenda</a>
              <a class="dropdown-item" href="info/berita_acara.php">Berita & Acara</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="foto.php">Galeri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Alumni</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kontak/kontak.php">Kontak</a>
          </li>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/SDNEGERI5MENTENG/login_role_php/">Login</a>
                </li>
            </ul>
      </div>
    </nav>
    <!-- akhir navbar -->

    <!-- slider -->
    <div class="slider">
      <div class="tulisan">
        <div class="garis">
          <p data-aos="fade-right" data-aos-duration="500">Our Values</p>
          <h1 data-aos="fade-right" data-aos-duration="1500">Respect</h1>
        </div>
        <p data-aos="zoom-in" data-aos-duration="2000">Respect one other</p>
      </div>
      <div class="faded-1">
        <img src="img/slide1.jpg" alt="">
      </div>
      <div class="faded-2">
        <img src="img/slide2.jpg" alt="">
      </div>
    </div>
    <!-- akhir slider -->

    <!-- konten -->
    <div class="container visi-misi">

      <!-- welcome -->
      <div class="row welcome">
        <div class="col text-center">
          <h1 class="judul-welcome">Welcome To SD Negeri 5 Menteng</h1>
          <p class="">SD NEGERI 5 MENTENG adalah salah satu satuan pendidikan dengan jenjang SD di MENTENG, Kec. Jekan Raya, Kota Palangka Raya, Kalimantan Tengah. Dalam menjalankan kegiatannya, SD NEGERI 5 MENTENG berada di bawah naungan Kementerian Pendidikan dan Kebudayaan.</p>
          <span></span>
        </div>
      </div>
    <div class="konten">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1 class="judul">Terakhir di update</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <h1>Berita & Acara</h1>
          </div>
          <div class="col-lg-6">
            <a href="#" class="berita lengkap">Lihat semua berita & acara <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row" data-aos="fade-left" data-aos-duration="1000">
          <div class="col-lg-6">
            <a href="#">
              <div class="card portal-berita-besar">
                <div class="card-body">
                  <div class="row header-berita-besar">
                    <p class="header-berita">News</p>
                    <p><i class="fa fa-newspaper-o" aria-hidden="true"></i></p>
                  </div>
                  <div class="row">
                    <h5 class="tanggal-berita">8 AGUSTUS 2021</h5>
                  </div>
                  <div class="row">
                    <h4>Congratulation to Lefrand septiand maydi</h4>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-3">
            <a href="">
              <div class="card berita-kecil">
                <div class="card-body">
                  <div class="row">
                    <p class="header-berita">News</p>
                  </div>
                  <div class="row">
                    <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur, quaerat.</h3>
                  </div>
                  <div class="row garis-bawah-berita">
                    <span></span>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-3">
            <a href="#">
              <div class="card berita-kecil">
                <div class="card-body">
                  <div class="row">
                    <p class="header-berita">News</p>
                  </div>
                  <div class="row">
                    <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur, quaerat.</h3>
                  </div>
                  <div class="row garis-bawah-berita">
                    <span></span>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row" data-aos="fade-right" data-aos-duration="1500">
          <div class="col-lg-3">
            <a href="#">
              <div class="card berita-kecil">
                <div class="card-body">
                  <div class="row">
                    <p class="header-berita">Event</p>
                  </div>
                  <div class="row">
                    <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur, quaerat.</h3>
                  </div>
                  <div class="row garis-bawah-berita">
                    <span></span>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-3">
            <a href="#">
              <div class="card berita-kecil">
                <div class="card-body">
                  <div class="row">
                    <p class="header-berita">Event</p>
                  </div>
                  <div class="row">
                    <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur, quaerat.</h3>
                  </div>
                  <div class="row garis-bawah-berita">
                    <span></span>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-6">
            <a href="#">
              <div class="card portal-berita-besar">
                <div class="card-body">
                  <div class="row header-berita-besar">
                    <p class="header-berita">Event</p>
                    <p><i class="fa fa-newspaper-o" aria-hidden="true"></i></p>
                  </div>
                  <div class="row">
                    <h5 class="tanggal-berita">24 Maret 2021</h5>
                  </div>
                  <div class="row">
                    <h4>Congratulation to Abdullah Khadafi</h4>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="gambar-pembatas">
      <div class="row">
        <div class="col">
          <h1 data-aos="flip-right" data-aos-duration="1200" data-aos-easing="
          ease-in-out-quart">IT School For Future</h1>
        </div>
      </div>
    </div>
    <div class="footer-first">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h4>SD Negeri 5 Menteng</h4>
          </div>
          <div class="col-lg-8">
            <h5>Lokasi</h5>
            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Jl. Temanggung Tilung No.123, Menteng, Kec.Jekan Raya, Kota Palangkarya, Kalimantan Tengah 74874 </p>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-second bg-dark text-light text-center py-3">
      <p data-aos="fade-up" data-aos-duration="1000" data-aos-offset="10">&copy; SDN 5 MENTENG</p>
    </div>
    <!-- akhir konten -->


  </div>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html> 