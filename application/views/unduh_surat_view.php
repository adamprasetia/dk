<div class="row">
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row row-heading">
                    <h3>
                        UNDUHAN SURAT
                    </h3>
                    <p>Dinas Kebersihan dan Pertamanan Kabupaten Cianjur</p>
                </div>
                <ul>
                    <li><?php echo anchor(config_item('assets').'pdf/Perda_retribusi-07-2012.pdf','Perda retribusi tentang pelayanan pada Dinas Kebersihan dan Pertamanan Perda no 7 tahun 2012') ?></li>
                    <li><?php echo anchor(config_item('assets').'pdf/perda_pembetukan_no_02_th_2010.pdf','Perda pembentukan Dinas Kebersihan dan Pertamanan no 02 th 2010') ?></li>
                    <li><?php echo anchor(config_item('assets').'pdf/peraturan_bupati_no_49_tahun_2010.pdf','Perbub tentang tupoksi no 49 tahun 2010') ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                Link Terkait
            </div>
            <div class="panel-body">
                <?php $this->load->view('side_menu',array('menu'=>'lainnya')) ?>
            </div>
        </div>    
    </div>
</div>    