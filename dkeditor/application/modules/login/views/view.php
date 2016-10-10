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
</head>
<body class="login-page">
    <div class="container login-box">
        <div class="panel">
            <div class="panel-heading">
                <a href="<?php echo base_url() ?>"><b><?php echo config_item('app_name') ?></b></a>
            </div>  
            <div class="panel-body">
                <p class="login-box-msg"><?php echo $this->lang->line('login_quote') ?></p>
                <?php echo validation_errors() ?>
                <?php echo form_open('login') ?>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="<?php echo $this->lang->line('username') ?>" name="username">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="<?php echo $this->lang->line('password') ?>" name="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">

                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-warning btn-block btn-flat"><?php echo $this->lang->line('login') ?></button>
                    </div>                
                </div>
                <?php echo form_close() ?>      
            </div>
        </div>    
    </div>
    <script type="text/javascript" src="<?php echo config_item('assets') ?>plugin/jquery/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo config_item('assets') ?>plugin/bootstrap-3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
