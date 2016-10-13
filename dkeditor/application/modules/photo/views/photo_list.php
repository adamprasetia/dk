<section class="content-header">
    <h1>
        Foto
        <small>Pengolahan foto/gambar</small>
    </h1>
    <ol class="breadcrumb">
        <li><?php echo anchor('home','<span class="glyphicon glyphicon-home"></span> '.$this->lang->line('home'))?></li>
        <li class="active">Foto</li>
    </ol>
</section>
<section class="content">
    <ul class="nav nav-tabs">
        <li role="presentation" class="active"><?php echo anchor('photo','Daftar Foto') ?></li>
        <li role="presentation"><?php echo anchor('photo/upload','Unggah Foto') ?></li>
    </ul>
    <div class="row">
        <div class="col-lg-12">
            <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success" role="alert"><?php echo $this->session->flashdata('success') ?></div>
            <?php endif ?>
            <?php if ($this->session->flashdata('error')): ?>
                <div class="alert alert-danger" role="alert"><?php echo $this->session->flashdata('error') ?></div>
            <?php endif ?>
        </div>
        <?php foreach ($list as $row): ?>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="javascript:void(0)">
                    <img class="img-responsive" src="<?php echo config_item('assets').'photo/'.thumb($row->filename) ?>" alt="<?php echo $row->title ?>">
                </a>
                <p><?php echo '<strong>Judul</strong> : '.$row->title ?></p>
                <p><?php echo '<strong>Gallery</strong> : '.($row->is_gallery==1?'Ya':'Tidak') ?></p>
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
</section>