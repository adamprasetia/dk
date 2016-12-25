<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dinas Kebersihan Kabupaten Cianjur</title>
	<link rel="shortcut icon" href="http://www.cianjurkab.go.id/images/cjr_icon.png" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="<?php echo config_item('assets') ?>plugin/bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo config_item('assets') ?>css/carousel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo config_item('assets') ?>css/headline.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo config_item('assets') ?>plugin/freebie-footer-templates/css/footer.css">
	<link rel="stylesheet" type="text/css" href="<?php echo config_item('assets') ?>css/style.css">
	<script type="text/javascript" src="<?php echo config_item('assets') ?>plugin/jquery/jquery-1.11.3.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-custom navbar-static-top">
		<div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
			    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
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

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php $this->load->view('menu_view'); ?>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<div class="container">
		<?php 
			if (isset($content)) {
				echo $content; 
			}		
		?>
	</div>
    <footer class="footer-distributed">
        <div class="footer-left">        
            <h3 class="hidden-xs">Dinas<span>Kebersihan</span>dan<span>Pertamanan</span></h3>
            <p class="footer-links">
                <?php echo anchor('home','Home') ?>
                ·
                <?php echo anchor('pages/gambaran_umum','Profil') ?>
                ·
                <?php echo anchor('pages/visi_dan_misi','Visi & Misi') ?>
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
	<script type="text/javascript" src="<?php echo config_item('assets') ?>plugin/bootstrap-3.3.7/js/bootstrap.min.js"></script>
</body>
</html>