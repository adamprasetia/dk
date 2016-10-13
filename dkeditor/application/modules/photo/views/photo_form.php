<section class="content-header">
    <h1>
        <?php echo $title ?>
        <small>Pengolahan foto/gambar</small>
    </h1>
    <ol class="breadcrumb">
        <li><?php echo anchor('home','<span class="glyphicon glyphicon-home"></span> '.$this->lang->line('home'))?></li>
        <li class="active">Foto</li>
    </ol>
</section>
<section class="content">
	<ul class="nav nav-tabs">
		<li role="presentation"><?php echo anchor('photo','Daftar Foto') ?></li>
		<li role="presentation" class="active"><?php echo anchor('photo/upload',$title) ?></li>
	</ul>
	<?php if ($this->session->flashdata('success')): ?>
		<div class="alert alert-success" role="alert"><?php echo $this->session->flashdata('success') ?></div>
	<?php endif ?>
	<?php if ($this->session->flashdata('error')): ?>
		<div class="alert alert-danger" role="alert"><?php echo $this->session->flashdata('error') ?></div>
	<?php endif ?>
	<?php echo form_open_multipart($action)?>
	<div class="panel panel-default">
		<div class="panel-heading">
			<?php echo $title ?>
		</div>
		<div class="panel-body">
			<div class="form-group form-inline">
				<?php echo form_label('Judul','title',array('class'=>'control-label'))?>
				<?php echo form_input(array('name'=>'title','class'=>'form-control input-sm','maxlength'=>'50','size'=>'50','autocomplete'=>'off','autofocus'=>'autofocus','value'=>set_value('title',(isset($row->title)?$row->title:''))))?>
				<small><?php echo form_error('title')?></small>
			</div>
			<div class="form-group form-inline">
				<?php echo form_label('Deskripsi','desc',array('class'=>'control-label'))?>
				<?php echo form_textarea(array('name'=>'desc','class'=>'form-control input-sm','maxlength'=>'50','rows'=>'3','cols'=>'100','autocomplete'=>'off','value'=>set_value('desc',(isset($row->desc)?$row->desc:''))))?>
				<small><?php echo form_error('desc')?></small>
			</div>
			<div class="form-group form-inline">
				<?php echo form_label('Masuk galeri','is_gallery',array('class'=>'control-label'))?>
				<?php echo form_checkbox(array('name'=>'is_gallery','value'=>'1','checked'=>set_value('is_gallery',(isset($row->is_gallery) && $row->is_gallery==1?true:false))))?>
				<small><?php echo form_error('is_gallery')?></small>
			</div>
			<div class="form-group form-inline">
				<?php echo form_label('Foto','userfile',array('class'=>'control-label'))?>
				<?php echo form_upload(array('name'=>'userfile','class'=>'form-control input-sm'))?>
				<small><?php echo form_error('userfile')?></small>
			</div>
			<?php if (isset($row->filename)): ?>
				<div class="form-group form-inline">
					<?php echo form_label('','',array('class'=>'control-label'))?>
					<img width="100px" src="<?php echo config_item('assets').'photo/'.thumb($row->filename) ?>">
				</div>			
			<?php endif ?>
		</div>
		<div class="panel-footer">
			<button class="btn btn-success btn-sm" type="submit" onclick="return confirm('Anda yakin')"><span class="glyphicon glyphicon-save"></span> Simpan</button>
			<?php echo anchor('photo','<span class="glyphicon glyphicon-repeat"></span> Batal',array('class'=>'btn btn-danger btn-sm'))?>
		</div>
	</div>
	<?php echo form_close()?>
</section>