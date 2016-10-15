<link rel="stylesheet" type="text/css" href="<?php echo config_item('assets') ?>plugin/bootstrap-photo-gallery/jquery.bsPhotoGallery.css">
<style>
    @import url(https://fonts.googleapis.com/css?family=Bree+Serif);

    body {
        background:#ebebeb;
    }
    ul.first {
        padding:0 0 0 0;
        margin:0 0 40px 0;
    }
    ul.first li {
        list-style:none;
        margin-bottom:10px;
    }

    .text {
        /*font-family: 'Bree Serif';*/
        color:#666;
        font-size:11px;
        margin-bottom:10px;
        padding:12px;
        background:#fff;
    }
  </style>    
<div class="row" style="text-align:center; border-bottom:1px dashed #ccc;  padding:0 0 20px 0; margin-bottom:40px;">
    <h3 style="font-family:'Bree Serif', arial; font-weight:bold; font-size:30px;">
        Galeri Dinas Kebersihan dan Pertamanan
    </h3>
    <p>Kabupaten Cianjur</p>
</div>

<ul class="row first">
    <li>
        <img alt="Bangunan" src="<?php echo config_item('assets').'img/office/1.jpg' ?>">
        <div class="text">Kantor Dinas Kebersihan dan Pertamanan Kab. Cianjur</div>
    </li>
    <li>
        <img alt="Bangunan" src="<?php echo config_item('assets').'img/office/2.jpg' ?>">
        <div class="text">Kantor Dinas Kebersihan dan Pertamanan Kab. Cianjur</div>
    </li>
    <li>
        <img alt="Kendaraan" src="<?php echo config_item('assets').'img/kendaraan/1.jpg' ?>">
        <div class="text">Kendaraan Dinas Kebersihan dan Pertamanan Kab. Cianjur</div>
    </li>
    <li>
        <img alt="Kendaraan" src="<?php echo config_item('assets').'img/kendaraan/2.jpg' ?>">
        <div class="text">Kendaraan Dinas Kebersihan dan Pertamanan Kab. Cianjur</div>
    </li>
    <li>
        <img alt="Kendaraan" src="<?php echo config_item('assets').'img/kendaraan/3.jpg' ?>">
        <div class="text">Kendaraan Dinas Kebersihan dan Pertamanan Kab. Cianjur</div>
    </li>
    <li>
        <img alt="Kegiatan" src="<?php echo config_item('assets').'img/kegiatan/1.jpg' ?>">
        <div class="text">Kegiatan Dinas Kebersihan dan Pertamanan Kab. Cianjur</div>
    </li>
    <li>
        <img alt="Kegiatan" src="<?php echo config_item('assets').'img/kegiatan/2.jpg' ?>">
        <div class="text">Kegiatan Dinas Kebersihan dan Pertamanan Kab. Cianjur</div>
    </li>
    <li>
        <img alt="Kegiatan" src="<?php echo config_item('assets').'img/kegiatan/3.jpg' ?>">
        <div class="text">Kegiatan Dinas Kebersihan dan Pertamanan Kab. Cianjur</div>
    </li>
    <li>
        <img alt="Kegiatan" src="<?php echo config_item('assets').'img/kegiatan/4.jpg' ?>">
        <div class="text">Kegiatan Dinas Kebersihan dan Pertamanan Kab. Cianjur</div>
    </li>
    <li>
        <img alt="Kegiatan" src="<?php echo config_item('assets').'img/kegiatan/5.jpg' ?>">
        <div class="text">Kegiatan Dinas Kebersihan dan Pertamanan Kab. Cianjur</div>
    </li>
    <li>
        <img alt="Kegiatan" src="<?php echo config_item('assets').'img/kegiatan/6.jpg' ?>">
        <div class="text">Kegiatan Dinas Kebersihan dan Pertamanan Kab. Cianjur</div>
    </li>
</ul>
<script type="text/javascript" src="<?php echo config_item('assets') ?>plugin/bootstrap-3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo config_item('assets') ?>plugin/bootstrap-photo-gallery/jquery.bsPhotoGallery.js"></script>
<script>
$(document).ready(function(){
    $('ul.first').bsPhotoGallery({
      "classes" : "col-lg-2 col-md-4 col-sm-3 col-xs-4 col-xxs-12",
      "hasModal" : true,
      // "fullHeight" : false
    });
});
</script>