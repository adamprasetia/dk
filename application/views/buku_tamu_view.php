<div class="panel panel-default">
	<div class="panel-heading">
		<?php echo anchor('buku_tamu/create','Tulis Buku Tamu',array('class'=>'btn btn-warning btn-sm')) ?>	
	</div>
	<div class="panel-body">
		<div class="row row-heading" >
		    <h3>
		        BUKU TAMU
		    </h3>
		    <p>Dinas Kebersihan dan Pertamanan Kabupaten Cianjur</p>
		</div>
		<?php foreach ($result as $row): ?>
			<p><label class="control-label">Nama Lengkap</label> : <?php echo $row->name ?></p>
			<p><label class="control-label">Email</label> : <?php echo $row->email ?></p>
			<p><label class="control-label">Alamat</label> : <?php echo $row->address ?></p>
			<p><label class="control-label">Pesan</label> : <?php echo $row->message ?></p>
			<hr>
		<?php endforeach ?>
		<div class="pagination">
			<?php echo $pagination ?>
		</div>
	</div>
</div>