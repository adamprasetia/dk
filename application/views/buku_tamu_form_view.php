<?php echo form_open('buku_tamu/create')?>
<div class="panel panel-default">
	<div class="panel-body">
		<div class="row row-heading" >
		    <h3>
		        BUKU TAMU
		    </h3>
		    <p>Dinas Kebersihan dan Pertamanan Kabupaten Cianjur</p>
		</div>
		<?php if ($this->session->flashdata('success')): ?>
			<div class="alert alert-success" role="alert"><?php echo $this->session->flashdata('success') ?></div>
		<?php endif ?>
		<?php if ($this->session->flashdata('error')): ?>
			<div class="alert alert-danger" role="alert"><?php echo $this->session->flashdata('error') ?></div>
		<?php endif ?>		
		<div class="form-group form-inline">
			<?php echo form_label('Nama Lengkap','name',array('class'=>'control-label'))?>
			<?php echo form_input(array('name'=>'name','class'=>'form-control input-sm','maxlength'=>'100','size'=>'50','autocomplete'=>'off','value'=>set_value('name',''),'required'=>'required','autofocus'=>'autofocus'))?>
			<small><?php echo form_error('name')?></small>
		</div>
		<div class="form-group form-inline">
			<?php echo form_label('Email','email',array('class'=>'control-label'))?>
			<?php echo form_input(array('name'=>'email','class'=>'form-control input-sm','maxlength'=>'150','size'=>'50','autocomplete'=>'off','value'=>set_value('email',''),'required'=>'required'))?>
			<small><?php echo form_error('email')?></small>
		</div>
		<div class="form-group form-inline">
			<?php echo form_label('Alamat','address',array('class'=>'control-label'))?>
			<?php echo form_input(array('name'=>'address','class'=>'form-control input-sm','maxlength'=>'200','size'=>'50','autocomplete'=>'off','value'=>set_value('address',''),'required'=>'required'))?>
			<small><?php echo form_error('address')?></small>
		</div>
		<div class="form-group form-inline">
			<?php echo form_label('Pesan','message',array('class'=>'control-label'))?>
			<?php echo form_textarea(array('name'=>'message','class'=>'form-control input-sm','maxlength'=>'200','cols'=>'100','rows'=>'4','autocomplete'=>'off','value'=>set_value('message',''),'required'=>'required'))?>
			<small><?php echo form_error('message')?></small>
		</div>
		<div class="form-group form-inline">
			<?php echo form_label('Masukan kode berikut','code',array('class'=>'control-label'))?>
			<?php echo $captcha['image'] ?>
			<input type="hidden" name="captcha" value="<?php echo $captcha['word'] ?>">
			<?php echo form_input(array('name'=>'code','class'=>'form-control input-sm','maxlength'=>'4','autocomplete'=>'off','required'=>'required'))?>
			<small><?php echo form_error('code')?></small>
		</div>
	</div>
	<div class="panel-footer">
		<button class="btn btn-success btn-sm" type="submit" onclick="return confirm('Anda yakin ?')"><span class="glyphicon glyphicon-upload"></span> Kirim</button>
	</div>
</div>
<?php echo form_close()?>	
