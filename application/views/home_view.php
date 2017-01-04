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
    <link rel="stylesheet" type="text/css" href="<?php echo config_item('assets') ?>css/carousel.css?v=2">
    <link rel="stylesheet" type="text/css" href="<?php echo config_item('assets') ?>css/headline.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo config_item('assets') ?>plugin/freebie-footer-templates/css/footer.css">
    <link rel="stylesheet" type="text/css" href="<?php echo config_item('assets') ?>plugin/bootstrap-photo-gallery/jquery.bsPhotoGallery.css">
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
              <p class="navbar-text hidden-lg hidden-md hidden-sm">Dinas Kebersihan dan Pertamanan Cianjur</p>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <?php $this->load->view('menu_view'); ?>
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
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img class="first-slide" src="<?php echo config_item('assets') ?>img/b1.jpg" alt="First slide">
        <div class="container">
          <div class="carousel-caption">
            <img src="<?php echo config_item('assets') ?>img/logo.png" width="100">
            <p>Dinas Kebersihan dan Pertamanan Kabupaten Cianjur</p>
          </div>
        </div>
      </div>
      <div class="item">
        <img class="second-slide" src="<?php echo config_item('assets') ?>img/kendaraan/2.jpg" alt="Second slide">
        <div class="container">
          <div class="carousel-caption">
            <img src="<?php echo config_item('assets') ?>img/logo.png" width="100">
            <p>"Cianjur Lebih Maju dan Agamis"</p>
          </div>
        </div>
      </div>
      <div class="item">
        <img class="second-slide" src="<?php echo config_item('assets') ?>img/prestasi/1.jpg" alt="Third slide">
        <div class="container">
          <div class="carousel-caption">
            <img src="<?php echo config_item('assets') ?>img/logo.png" width="100">
            <p>"Kota Bersih dan Teduh"</p>
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

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        GAMBARAN UMUM
                    </div>                
                    <div class="panel-body">
                        <p>Dinas Kebersihan dan Pertamanan merupakan urusan pelaksana otonom daerah di bidang kebersihan dan pertamanan, dipimpin oleh seorang Kepala Dinas yang berada di bawah dan bertanggungjawab kepada Bupati melalui Sekretaris Daerah yang di bentuk dari perda kabupaten cianjur No 02 tahun2010.</p>                    
                        <img src="<?php echo config_item('assets')?>img/office/3.jpg" class="img-thumbnail img-responsive center-block">
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        PENGUMUMAN
                    </div>                
                    <div class="panel-body">
                        <ol>
                            <li>Kegiatan rutin jumat bersih harus dilaksanakan oleh seluruh warga cianjur </li>
                            <li>Pelaksanaan kegiatan Persiapan Adipura Tahap I untuk penilaian adipura tahun 2017</li>                    
                        </ol>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        LAPORAN
                    </div>                
                    <div class="panel-body">
                        <ul>
                            <li><?php echo anchor(config_item('assets').'pdf/lakip.pdf','LAKIP') ?></li>
                            <li><?php echo anchor(config_item('assets').'pdf/renja.pdf','RENJA') ?></li>
                            <li><?php echo anchor(config_item('assets').'pdf/renstra.pdf','RENSTRA') ?></li>
                        </ul>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        JENIS PELAYANAN
                    </div>                
                    <div class="panel-body">
                        <ul>
                            <li>Pelayanan Pengangkutan Sampah</li>
                            <li>Pelayanan Sedot Tinja/Kakus</li>
                            <li>Pelayanan Pemakaman</li>
                            <li>Pelayanan Pembungan Sampah di TPA</li>
                        </ul>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        VIDEO
                    </div>                
                    <div class="panel-body">
                        <iframe width="100%" src="https://www.youtube.com/embed/2Ex-59XlExc" frameborder="0" allowfullscreen></iframe>
                        <iframe width="100%" src="https://www.youtube.com/embed/laFY1sEH53Q" frameborder="0" allowfullscreen></iframe>
                        <iframe width="100%" src="https://www.youtube.com/embed/KLM8zx2E72k" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>

            <!--<div class="panel panel-default">
                    <div class="panel-heading">
                        BUKU TAMU
                    </div>                
                    <div class="panel-body">
                        <?php foreach ($buku_tamu as $row): ?>
                            <p><label class="control-label">Nama Lengkap</label> : <?php echo $row->name ?></p>
                            <p><label class="control-label">Email</label> : <?php echo $row->email ?></p>
                            <p><label class="control-label">Alamat</label> : <?php echo $row->address ?></p>
                            <p><label class="control-label">Pesan</label> : <?php echo $row->message ?></p>
                            <hr>
                        <?php endforeach ?>
                    </div>
                    <div class="panel-footer">
                        <p class="text-center"><?php echo anchor('buku_tamu','Selengkapnya',array('class'=>'btn btn-warning')) ?></p>
                    </div>    
                </div> -->            
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        BERITA
                    </div>                
                    <div class="panel-body">
                        <?php foreach ($article as $row): ?>
                        <div class="media media-list">
                            <div class="media-left">
                                <?php echo anchor('article/read/'.$row->id,'<img class="media-object" src="'.$row->image.'" alt="'.$row->title.'" width="140" height="96">') ?>
                            </div>
                            <div class="media-body">
                                <h5 class="media-heading" title="<?php echo $row->title ?>"><?php echo anchor('article/read/'.$row->id,word_limiter($row->title,8)) ?></h5>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                    <div class="panel-footer">
                        <p class="text-center"><?php echo anchor('article','Selengkapnya',array('class'=>'btn btn-warning')) ?></p>
                    </div>    
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        PRESTASI
                    </div>                
                    <div class="panel-body">
                        <ul class="first"><li><img alt='Prestasi yang pernah di raih oleh Dinas Kebersihan dan Peratmanan Kabupaten Cianjur yaitu Program ADIPURA yang diraih beberapa tahun yang di selenggarakan oleh Kementrian Lingkungan hidup yang bertujuan untuk program Adipura difokuskan untuk mendorong kota-kota di Indonesia menjadi "Kota Bersih dan Teduh".' src="<?php echo config_item('assets')?>img/prestasi/1.jpg" class="img-thumbnail img-responsive center-block"></li></ul>
                        <ul class="first"><li><img alt='Prestasi yang pernah di raih oleh Dinas Kebersihan dan Peratmanan Kabupaten Cianjur yaitu Program ADIPURA yang diraih beberapa tahun yang di selenggarakan oleh Kementrian Lingkungan hidup yang bertujuan untuk program Adipura difokuskan untuk mendorong kota-kota di Indonesia menjadi "Kota Bersih dan Teduh".' src="<?php echo config_item('assets')?>img/prestasi/2.jpg" class="img-thumbnail img-responsive center-block"></li></ul>
                        <ul class="first"><li><img alt='Prestasi yang pernah di raih oleh Dinas Kebersihan dan Peratmanan Kabupaten Cianjur yaitu Program ADIPURA yang diraih beberapa tahun yang di selenggarakan oleh Kementrian Lingkungan hidup yang bertujuan untuk program Adipura difokuskan untuk mendorong kota-kota di Indonesia menjadi "Kota Bersih dan Teduh".' src="<?php echo config_item('assets')?>img/prestasi/3.jpg" class="img-thumbnail img-responsive center-block"></li></ul>
                    </div>
                </div>
            </div>    
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        GALERI
                    </div>                
                    <div class="panel-body">
                        <ul class="row first">
                            <?php $i=1;foreach ($photo as $row): ?>
                            <li>
                                <img alt="<?php echo $row->title ?>" src="<?php echo config_item('assets').'photo/'.$row->filename ?>">
                                <div class="text"><?php echo $row->desc ?></div>
                            </li>
                            <?php if($i==4){break;}$i++;endforeach ?>
                        </ul>                                        
                    </div>
                    <div class="panel-footer">
                        <p class="text-center"><?php echo anchor('gallery','Selengkapnya',array('class'=>'btn btn-warning')) ?></p>                        
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        UNDUHAN SURAT
                    </div>                
                    <div class="panel-body">
                        <ul>
                            <li><?php echo anchor(config_item('assets').'pdf/Perda_retribusi-07-2012.pdf','Perda retribusi tentang pelayanan pada Dinas Kebersihan dan Pertamanan Perda no 7 tahun 2012') ?></li>
                            <li><?php echo anchor(config_item('assets').'pdf/perda_pembetukan_no_02_th_2010.pdf','Perda pembentukan Dinas Kebersihan dan Pertamanan no 02 th 2010') ?></li>
                            <li><?php echo anchor(config_item('assets').'pdf/peraturan_bupati_no_49_tahun_2010.pdf','Perbub tentang tupoksi no 49 tahun 2010') ?></li>
                        </ul>
                    </div>
                </div>                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        PETA LAYANAN KEBERSIHAN
                    </div>                
                    <div class="panel-body">
                        <p><strong>Pelayanan Angkutan Sampah</strong></p>
                        <ul class="first"><li><img alt="Pelayanan Angkutan Sampah" class="img-thumbnail img-responsive center-block" src="<?php echo config_item('assets') ?>img/peta.jpg"></li></ul>
                        <p><strong>Pelayanan TPA (TPA PASIR SEMBUNG)</strong></p>
                        <ul class="first"><li><img alt="Pelayanan TPA (TPA PASIR SEMBUNG)" class="img-thumbnail img-responsive center-block" src="<?php echo config_item('assets') ?>img/tpa.jpg"></li></ul>
                    </div>
                </div>                
            </div>
        </div>    
    </div>

    <footer class="footer-distributed">
        <div class="footer-left">        
            <h3 class="hidden-xs">Dinas<span>Kebersihan</span>dan<span>Pertamanan</span></h3>
            <p class="footer-links">
                <?php echo anchor('home','Home') ?>
                ·
                <?php echo anchor('page/profil','Profil') ?>
                ·
                <?php echo anchor('page/visimisi','Visi & Misi') ?>
                ·
                <?php echo anchor('gallery','Galeri') ?>
            </p>
            <p class="footer-company-name">Dinas Kebersihan dan Pertamanan Kabupaten Cianjur &copy; 2016</p>
        </div>
        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Jl. Perintis Kemerdekaan</span> Jebrod, Cianjur</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>(0263) 265110</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:kebersihan.cianjur@gmail.com">kebersihan.cianjur@gmail.com</a></p>
            </div>

        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>Dinas Kebersihan dan Pertamanan Kabupaten Cianjur</span>
                Merupakan urusan pelaksana otonom daerah di bidang kebersihan dan pertamanan.
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="<?php echo config_item('assets') ?>plugin/jquery/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo config_item('assets') ?>plugin/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo config_item('assets') ?>plugin/bootstrap-photo-gallery/jquery.bsPhotoGallery.js"></script>
    <script>
        $(document).ready(function(){
            $('.first').bsPhotoGallery({
              "classes" : "col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xxs-12",
              "hasModal" : true
            });
        });        
    </script>
</body>
</html>