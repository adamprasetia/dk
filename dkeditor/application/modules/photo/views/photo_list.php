<ul class="nav nav-tabs">
    <li role="presentation" class="active"><?php echo anchor('photo','Daftar Foto') ?></li>
    <li role="presentation"><?php echo anchor('photo/upload','Unggah Foto') ?></li>
</ul>
<div class="row">

    <div class="col-lg-12">
        <h1 class="page-header">Daftar Foto</h1>
    </div>
    <?php foreach ($list as $row): ?>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="javascript:void(0)">
                <img class="img-responsive" src="<?php echo config_item('assets').'photo/'.$row->filename ?>" alt="<?php echo $row->title ?>">
            </a>
            <p>
                <?php echo anchor('photo/edit/'.$row->id,'Edit',array('class'=>'btn btn-default btn-xs')) ?>
                <?php echo anchor('photo/delete/'.$row->id,'Delete',array('class'=>'btn btn-danger btn-xs','onclick'=>"return confirm('Anda yakin')")) ?>
            </p>
        </div>
    <?php endforeach ?>
    <div class="col-lg-12">
        <?php echo $pagination ?>
    </div>
</div>        