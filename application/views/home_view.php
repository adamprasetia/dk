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
            <ul class="nav navbar-nav">
              <li class="active"><?php echo anchor('page/home','Home') ?></li>
              <li><?php echo anchor('page/profil','Profil') ?></li>
              <li><?php echo anchor('page/visimisi','Visi & Misi') ?></li>
              <li><?php echo anchor('page/gallery','Galeri') ?></li>
              <li><?php echo anchor('page/banksampah','Bank Sampah') ?></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><?php echo anchor('buku_tamu','Buku Tamu') ?></li>
              <li><?php echo anchor('contact_us','Hubungi Kami') ?></li>
              <li><?php echo anchor('page/sitemap','Peta Situs') ?></li>
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
            <img src="<?php echo config_item('assets') ?>img/logo.png">
            <h1>Profil</h1>
            <p>Dinas Pendidikan dan Pertamanan Kabupaten Cianjur</p>
            <p><?php echo anchor('page/profil','Selengkapnya',array('class'=>'btn btn-lg btn-warning','role'=>'button')) ?></p>
          </div>
        </div>
      </div>
      <div class="item">
        <img class="second-slide" src="<?php echo config_item('assets') ?>img/b3.jpg" alt="Second slide">
        <div class="container">
          <div class="carousel-caption">
            <img src="<?php echo config_item('assets') ?>img/logo.png">
            <h1>Visi</h1>
            <p>"Cianjur Lebih Maju dan Agamis"</p>
            <p><?php echo anchor('page/visimisi','Selengkapnya',array('class'=>'btn btn-lg btn-warning','role'=>'button')) ?></p>
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
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row row-heading">
                            <h3>
                                HEADLINE
                            </h3>
                            <p>Berita Pilihan Dinas Kebersihan dan Pertamanan Kabupaten Cianjur</p>
                        </div>
                        <div class="row">
                            <?php $i=1;foreach ($article_headline as $row): ?>
                                <?php if ($i==1): ?>
                                    <div class="col-md-12 col-lg-7">
                                        <div class="featured-article">
                                            <img src="<?php echo $row->image ?>" alt="<?php echo $row->title ?>" class="thumb" width="482" height="350">
                                            <div class="block-title">
                                                <h4 title="<?php echo $row->title ?>"><?php echo anchor('page/article/'.$row->id,$row->title) ?></h4>
                                                <p class="by-author"><small>Penulis : <?php echo $row->author ?></small></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-5">
                                        <ul class="media-list main-list">                                    
                                <?php else: ?>
                                    <li class="media">
                                      <div class="pull-left">
                                        <img class="media-object" src="<?php echo $row->image ?>" alt="<?php echo $row->title ?>" width="140" height="96">
                                      </div>
                                      <div class="media-body">
                                        <h5 class="media-heading" title="<?php echo $row->title ?>"><?php echo anchor('page/article/'.$row->id,word_limiter($row->title,8)) ?></h5>
                                        <p class="by-author">Penulis : <?php echo $row->author ?></p>
                                      </div>
                                    </li>                                    
                                <?php endif ?>
                            <?php $i++;endforeach ?>
                                </ul>
                            </div>
                        </div>            
                    </div>
                </div>            
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row row-heading">
                            <h3>
                                BERITA TERKINI
                            </h3>
                            <p>Berita Seputar Dinas Kebersihan dan Pertamanan Kabupaten Cianjur</p>
                        </div>
                        <?php foreach ($article as $row): ?>
                        <div class="media media-list">
                            <div class="media-left">
                                <?php echo anchor('page/article/'.$row->id,'<img class="media-object" src="'.$row->image.'" alt="'.$row->title.'" width="140" height="96">') ?>
                            </div>
                            <div class="media-body">
                                <h5 class="media-heading" title="<?php echo $row->title ?>"><?php echo anchor('page/article/'.$row->id,word_limiter($row->title,8)) ?></h5>
                                <p class="by-author">Penulis : <?php echo $row->author ?></p>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                    <div class="panel-footer">
                        <p class="text-center"><?php echo anchor('#','Lainnya',array('class'=>'btn btn-warning')) ?></p>
                    </div>    
                </div>
            </div>    
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row row-heading">
                            <h3>
                                GALERI
                            </h3>
                            <p>Dokumentasi Foto/Gambar</p>
                        </div>

                        <ul class="row first">
                            <?php $i=1;foreach ($list as $row): ?>
                            <li>
                                <img alt="<?php echo $row->title ?>" src="<?php echo config_item('assets').'photo/'.$row->filename ?>">
                                <div class="text"><?php echo $row->desc ?></div>
                            </li>
                            <?php if($i==4){break;}$i++;endforeach ?>
                        </ul>                                        
                    </div>
                    <div class="panel-footer">
                        <p class="text-center"><?php echo anchor('page/gallery','Selengkapnya',array('class'=>'btn btn-warning')) ?></p>                        
                    </div>
                </div>
            </div>
        </div>    
    </div>

    <footer class="footer-distributed">
        <div class="footer-left">        
            <h3 class="hidden-xs">Dinas<span>Kebersihan</span>dan<span>Pertamanan</span></h3>
            <p class="footer-links">
                <?php echo anchor('page/home','Home') ?>
                ·
                <?php echo anchor('page/profil','Profil') ?>
                ·
                <?php echo anchor('page/visimisi','Visi & Misi') ?>
                ·
                <?php echo anchor('page/gallery','Galeri') ?>
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

<!--             <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:support@company.com">support@company.com</a></p>
            </div>
 -->        </div>
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
            $('ul.first').bsPhotoGallery({
              "classes" : "col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xxs-12",
              "hasModal" : true
            });
        });        
    </script>
</body>
</html>