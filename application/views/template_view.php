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
	<link rel="stylesheet" type="text/css" href="<?php echo config_item('assets') ?>css/style.css">
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
		    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
            <li <?php echo ($this->uri->segment(1)=='home'?'class="active"':'') ?>><?php echo anchor('home','Home') ?></li>
            <li <?php echo ($this->uri->segment(1)=='profil'?'class="active"':'') ?>><?php echo anchor('profil','Profil') ?></li>
            <li <?php echo ($this->uri->segment(1)=='visimisi'?'class="active"':'') ?>><?php echo anchor('visimisi','Visi & Misi') ?></li>
            <li <?php echo ($this->uri->segment(1)=='gallery'?'class="active"':'') ?>><?php echo anchor('gallery','Galeri') ?></li>
            <li <?php echo ($this->uri->segment(1)=='banksampah'?'class="active"':'') ?>><?php echo anchor('banksampah','Bank Sampah') ?></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<div class="container marketing">
		<?php 
			if (isset($content)) {
				echo $content; 
			}		
		?>
		<hr>
		<footer>
			<p class="pull-right"><a href="#">Kembali ke atas</a></p>
			<p>&copy; 2016 Dinas Kebersihan dan Pertamanan Kabupaten Cianjur.</p>
		</footer>
	</div>
	<script type="text/javascript" src="<?php echo config_item('assets') ?>plugin/jquery/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="<?php echo config_item('assets') ?>plugin/bootstrap-3.3.7/js/bootstrap.min.js"></script>
</body>
</html>