<link rel="stylesheet" type="text/css" href="<?php echo config_item('assets') ?>plugin/bootstrap-photo-gallery/jquery.bsPhotoGallery.css">
<div class="row row-heading" >
    <h3>
        GALERI
    </h3>
    <p>Dinas Kebersihan dan Pertamanan Kabupaten Cianjur</p>
</div>

<ul class="row first">
    <?php foreach ($list as $row): ?>
    <li>
        <img alt="<?php echo $row->title ?>" src="<?php echo config_item('assets').'photo/'.$row->filename ?>">
        <div class="text"><?php echo $row->desc ?></div>
    </li>
    <?php endforeach ?>
</ul>
<div class="pagination">
    <?php echo $pagination ?>
</div>
<script type="text/javascript" src="<?php echo config_item('assets') ?>plugin/bootstrap-3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo config_item('assets') ?>plugin/bootstrap-photo-gallery/jquery.bsPhotoGallery.js"></script>
<script>
$(document).ready(function(){
    $('ul.first').bsPhotoGallery({
      "classes" : "col-lg-2 col-md-4 col-sm-3 col-xs-4 col-xxs-12",
      "hasModal" : true
    });
});
</script>