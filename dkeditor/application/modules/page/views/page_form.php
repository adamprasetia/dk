<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
	tinymce.init({
		selector:'textarea',
		plugins:'advlist autolink link image lists charmap print preview',
		height : 500
	});
</script>
<section class="content-header">
	<h1>
		<?php echo $title ?>
		<small><?php echo $subtitle?></small>
	</h1>
	<ol class="breadcrumb">
		<li><?php echo anchor('home','<span class="glyphicon glyphicon-home"></span> '.$this->lang->line('home'))?></li>
		<li><?php echo anchor($breadcrumb,$this->lang->line('list'))?></li>
		<li class="active"><?php echo $title?></li>
	</ol>
</section>
<section class="content">
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><?php echo $add_btn ?></li>
		<li role="presentation"><?php echo $list_btn ?></li>
	</ul>
	<?php echo $this->session->flashdata('alert')?>
	<?php echo form_open($action)?>
	<div class="panel panel-default">
		<div class="panel-heading owner">
			<?php echo $owner?>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<?php echo form_label('Judul','title',array('class'=>'control-label'))?>
				<?php echo form_input(array('name'=>'title','class'=>'form-control input-sm','maxlength'=>'200','autocomplete'=>'off','value'=>set_value('title',(isset($row->title)?$row->title:'')),'required'=>'required','autofocus'=>'autofocus'))?>
				<small><?php echo form_error('title')?></small>
			</div>
			<div class="form-group">
				<?php echo form_label('Nama','name',array('class'=>'control-label'))?>
				<?php echo form_input(array('name'=>'name','class'=>'form-control input-sm','maxlength'=>'50','autocomplete'=>'off','value'=>set_value('name',(isset($row->name)?$row->name:'')),'required'=>'required','autofocus'=>'autofocus'))?>
				<small><?php echo form_error('name')?></small>
			</div>
			<div class="form-group">
				<?php echo form_label('Konten','content',array('class'=>'control-label'))?>
				<textarea id="content" name="content"><?php echo set_value('content',(isset($row->content)?$row->content:'')) ?></textarea>
			</div>
		</div>
		<div class="panel-footer">
			<button class="btn btn-success btn-sm" type="submit" onclick="return confirm('Are you sure')"><span class="glyphicon glyphicon-save"></span> <?php echo $this->lang->line('save'); ?></button>
			<?php echo anchor($breadcrumb,'<span class="glyphicon glyphicon-repeat"></span> '.$this->lang->line('cancel'),array('class'=>'btn btn-danger btn-sm'))?>
		</div>
	</div>
	<?php echo form_close()?>
</section>