<ul class="nav navbar-nav">
    <li <?php echo ($this->uri->segment(2)=='home'?'class="active"':'') ?>><?php echo anchor('home','Beranda') ?></li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><?php echo anchor('pages/gambaran_umum','Gambaran Umum Dinas') ?></li>
            <li><?php echo anchor('pages/visi_dan_misi','Visi Misi') ?></li>
            <li><?php echo anchor('pages/tugas_pokok_dan_fungsi','Tugas Pokok dan Fungsi') ?></li>
            <li><?php echo anchor('pages/struktur_organisasi','Struktur Organisasi') ?></li>
            <li><?php echo anchor('pages/program_dan_kegiatan','Program & Kegiatan') ?></li>
            <li><?php echo anchor('pages/prestasi','Prestasi') ?></li>
            <li><?php echo anchor('pages/sambutan','Sambutan') ?></li>
            <li><?php echo anchor('pages/kontak','Kontak') ?></li>
        </ul>
    </li>              
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pelayanan <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><?php echo anchor('pages/jenis_pelayanan','Jenis Pelayanan') ?></li>
            <li><?php echo anchor('pages/prosedur_pelayanan','Prosedure Pelayanan') ?></li>
            <li><?php echo anchor('pages/peta_layanan_kebersihan','Peta Layanan Kebersihan') ?></li>
        </ul>
    </li>              
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Laporan <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><?php echo anchor(config_item('assets').'pdf/lakip.pdf','LAKIP') ?></li>
            <li><?php echo anchor(config_item('assets').'pdf/renja.pdf','RENJA') ?></li>
            <li><?php echo anchor(config_item('assets').'pdf/renstra.pdf','RENSTRA') ?></li>
        </ul>
    </li>              
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lainnya <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><?php echo anchor('pages/pengaduan','Pengaduan') ?></li>
            <li><?php echo anchor('pages/pengumuman','Pengumuman') ?></li>
            <li><?php echo anchor('pages/unduh_surat','Unduh Surat') ?></li>
            <li><?php echo anchor('article','Berita') ?></li>
            <li><?php echo anchor('gallery','Galeri') ?></li>
        </ul>
    </li>              
</ul>
<ul class="nav navbar-nav navbar-right">
    <!-- <li <?php echo ($this->uri->segment(1)=='buku_tamu'?'class="active"':'') ?>><?php echo anchor('buku_tamu','Buku Tamu') ?></li> -->
    <li <?php echo ($this->uri->segment(2)=='sitemap'?'class="active"':'') ?>><?php echo anchor('sitemap','Peta Situs') ?></li>
</ul>          
