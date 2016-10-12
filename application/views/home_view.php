<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo APP_NAME ?></title>
    <link rel="shortcut icon" href="http://www.cianjurkab.go.id/images/cjr_icon.png" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="<?php echo config_item('assets') ?>plugin/bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo config_item('assets') ?>css/carousel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo config_item('assets') ?>css/style.css">
</head>
<body>
    <div class="navbar-wrapper">
      <div class="container">
        <nav class="navbar navbar-custom navbar-static-top">
          <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url() ?>">
                    <img alt="Brand" src="<?php echo config_item('assets') ?>img/logo.png">
                </a>              
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><?php echo anchor('home','Home') ?></li>
                <li><?php echo anchor('profil','Profil') ?></li>
                <li><?php echo anchor('visimisi','Visi & Misi') ?></li>
                <li><?php echo anchor('gallery','Galeri') ?></li>
                <li><?php echo anchor('banksampah','Bank Sampah') ?></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="<?php echo config_item('assets') ?>img/b1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Kantor Dinas Kebersihan dan Pertamanan Kabupaten Cianjur</h1>
              <p>Mengenal lebih dalam Kantor Dinas Kebersihan dan Pertamanan Kabupaten Cianjur</p>
              <p><?php echo anchor('profil','Selengkapnya',array('class'=>'btn btn-lg btn-warning','role'=>'button')) ?></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="<?php echo config_item('assets') ?>img/b3.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Visi</h1>
              <p>"Terwujudnya Cianjur yang Bersih, indah,dan nyaman menuju Cianjur yang lebih Sejahtera dan Berahlakul Karimah"</p>
              <p><?php echo anchor('visimisi','Selengkapnya',array('class'=>'btn btn-lg btn-warning','role'=>'button')) ?></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div>
        <div class="row">
          <div class="col-lg-4">
            <img class="img-circle" src="<?php echo config_item('assets') ?>img/p1.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Profil</h2>
            <p>Dinas Kebersihan dan Pertamanan merupakan urusan pelaksana otonom daerah di bidang kebersihan dan pertamanan</p>
            <p><?php echo anchor('profil','Selengkapnya &raquo;',array('class'=>'btn btn-lg btn-default','role'=>'button')) ?></p>
          </div>
          <div class="col-lg-4">
            <img class="img-circle" src="<?php echo config_item('assets') ?>img/p3.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Visi & Misi</h2>
            <p>Terwujudnya Cianjur yang Bersih, indah,dan nyaman menuju Cianjur yang lebih Sejahtera dan Berahlakul Karimah</p>
            <p><?php echo anchor('visimisi','Selengkapnya &raquo;',array('class'=>'btn btn-lg btn-default','role'=>'button')) ?></p>
          </div>
          <div class="col-lg-4">
            <img class="img-circle" src="<?php echo config_item('assets') ?>img/p2.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Bank Sampah</h2>
            <p>Lebih baik hidup dari sampah, daripada hidup jadi sampah</p>
            <p><?php echo anchor('banksampah','Selengkapnya &raquo;',array('class'=>'btn btn-lg btn-default','role'=>'button')) ?></p>
          </div>
        </div>
      </div>

      <!-- START THE FEATURETTES -->

      <hr>

      <div class="row">
        <div class="col-md-7">
          <h2>LATAR BELAKANG</h2>
          <p class="lead">Untuk melaksanakan Undang-Undang Nomor 32 Tahun 2004, tentang Pemerintahan Daerah yang terakhir diubah dengan Undang-Undang Nomor 12 Tahun 2008, Pemerintah Daerah Kabupaten Cianjur telah membentuk Organisasi Perangkat Daerah ( OPD ) melalui Peraturan Daerah Kabupaten Cianjur Nomor 07 Tahun 2008, tentang Organisasi Pemerintah Daerah dan Pembentukan Organisasi Perangkat Daerah Kabupaten Cianjur.</p>
          <p class="lead">Dinas Kebersihan dan Pertamanan Kabupaten Cianjur dibentuk berdasarkan Peraturan Daerah dan Pembentukan Organisasi Perangkat Daerah Kabupaten Cianjur, yang kemudian ditindak lanjuti dengan Peraturan Bupati Kabupaten Cianjur Nomor 49 Tahun 2011, tentang Tugas, Fungsi dan Tata Kerja Unit Organisasi dilingkungan Dinas Kebersihan dan Pertamanan.</p>
        </div>
        <div class="col-md-5">
          <img class="img-responsive" src="<?php echo config_item('assets') ?>img/office/1.jpg" alt="">
        </div>
      </div>

      <hr>

      <div class="row">
        <div class="col-md-7 col-md-push-5">
          <h2>Peta wilayah Kecamatan yang terlayani</h2>
          <p class="lead">Terwujudnya Peningkatan Pelayanan dalam hal pengelolaan Taman dan Pemakaman yang berwawasan lingkungan </p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="img-responsive" src="<?php echo config_item('assets') ?>img/peta.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr>

      <div class="row">
        <div class="col-md-7">
          <h2>Kendaraan Operasional</h2>
          <p class="lead">Berkembangnya wilayah pelayanan kebersihan pertamanan dan pemakaman yang di dukung oleh ketersediaan dan pembangunan infrastruktur yang handal.</p>
        </div>
        <div class="col-md-5">
          <img class="img-responsive" src="<?php echo config_item('assets') ?>img/kendaraan/2.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr>

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Kembali ke atas</a></p>
        <p>&copy; 2016 Dinas Kebersihan dan Pertamanan Kabupaten Cianjur.</p>
      </footer>

    </div>
  <script type="text/javascript" src="<?php echo config_item('assets') ?>plugin/jquery/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="<?php echo config_item('assets') ?>plugin/bootstrap-3.3.7/js/bootstrap.min.js"></script>
</body>
</html>