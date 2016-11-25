<section class="content-header">
	<h1>
		<?php echo $title ?>
		<small><?php echo $subtitle ?></small>
	</h1>
	<ol class="breadcrumb">
		<li><?php echo anchor('home','<span class="glyphicon glyphicon-home"></span> '.$this->lang->line('home'))?></li>
		<li class="active"><?php echo $title ?></li>
	</ol>
</section>
<section class="content">
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><?php echo $list_btn ?></li>
		<li role="presentation"><?php echo $add_btn ?></li>
	</ul>
	<?php echo $this->session->flashdata('alert')?>
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="table-filter">
				<?php echo form_open($action,array('class'=>'form-inline'))?>
					<div class="form-group">
						<?php echo form_dropdown('limit',array('10'=>'10','50'=>'50','100'=>'100'),set_value('limit',$this->input->get('limit')),'onchange="submit()" class="form-control input-sm"')?> 
					</div>
					<div class="form-group">
						<?php echo form_input(array('name'=>'search','value'=>$this->input->get('search'),'autocomplete'=>'off','placeholder'=>$this->lang->line('search').'..','onchange=>"submit()"','class'=>'form-control input-sm'))?>
					</div>
				<?php echo form_close()?>
			</div>
			<div class="table-responsive">
				<?php echo $table?>
			</div>
		</div>
		<div class="panel-footer">
			<?php echo form_label($total,'',array('class'=>'label-footer'))?>
			<div class="pull-right">
				<?php echo $pagination?>
			</div>
		</div>		
	</div>
</section>