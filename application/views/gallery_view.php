<link rel="stylesheet" type="text/css" href="<?php echo config_item('assets') ?>plugin/lightbox-4.0.2/ekko-lightbox.min.css">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Galeri</h1>
    </div>
    <?php foreach ($list as $row): ?>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="<?php echo config_item('assets').'photo/'.$row->filename ?>" data-toggle="lightbox" data-gallery="example-gallery"  data-title="<?php echo $row->title ?>" data-footer="<?php echo $row->desc ?>">
                <img class="img-responsive img-fluid" src="<?php echo config_item('assets').'photo/'.thumb($row->filename) ?>" alt="<?php echo $row->title ?>">
            </a>
        </div>
    <?php endforeach ?>
    <div class="col-lg-12">
        <?php echo $pagination ?>
    </div>
</div>        
<script type="text/javascript" src="<?php echo config_item('assets') ?>plugin/lightbox-4.0.2/ekko-lightbox.min.js"></script>
<script type="text/javascript">
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
</script>