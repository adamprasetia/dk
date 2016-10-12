<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Galeri</h1>
    </div>
    <?php foreach ($list as $row): ?>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="javascript:void(0)">
                <img class="img-responsive" src="<?php echo config_item('assets').'photo/'.$row->filename ?>" alt="<?php echo $row->title ?>">
            </a>
        </div>
    <?php endforeach ?>
    <div class="col-lg-12">
        <?php echo $pagination ?>
    </div>
</div>        