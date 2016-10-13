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
	<link rel="stylesheet" type="text/css" href="<?php echo config_item('assets') ?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo config_item('assets') ?>dkeditor/css/style.css">
	<script type="text/javascript" src="<?php echo config_item('assets') ?>plugin/jquery/jquery-3.1.1.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-custom navbar-static-top">
		<div class="container">
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
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li <?php echo ($this->uri->segment(1)=='home'?'class="active"':'') ?>><?php echo anchor('home','Beranda') ?></li>
					<li <?php echo ($this->uri->segment(1)=='users'?'class="active"':'') ?>><?php echo anchor('users','Users') ?></li>
					<li <?php echo ($this->uri->segment(1)=='artikel'?'class="active"':'') ?>><?php echo anchor('artikel','Artikel') ?></li>
					<li <?php echo ($this->uri->segment(1)=='photo'?'class="active"':'') ?>><?php echo anchor('photo','Foto') ?></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $this->user_login['name'] ?> <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><?php echo anchor('change_password',$this->lang->line('change_password')) ?></li>
						<li role="separator" class="divider"></li>
						<li><?php echo anchor('home/logout',$this->lang->line('logout')) ?></li>
					</ul>
					</li>
				</ul>
			</div>
	  	</div>
	</nav>
	<div class="container">
		<?php 
			if (isset($content)) {
				echo $content; 
			}		
		?>
		<hr>
		<footer>
			<p>&copy; 2016 Dinas Kebersihan dan Pertamanan Kabupaten Cianjur.</p>
		</footer>
	</div>
	<script type="text/javascript" src="<?php echo config_item('assets') ?>plugin/bootstrap-3.3.7/js/bootstrap.min.js"></script>
</body>
</html>