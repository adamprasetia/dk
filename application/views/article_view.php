<div class="container">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row row-heading">
                <h3>
                    BERITA
                </h3>
                <p>Berita Seputar Dinas Kebersihan dan Pertamanan Kabupaten Cianjur</p>
            </div>
            <?php foreach ($article as $row): ?>
            <div class="media media-list">
                <div class="media-left">
                    <?php echo anchor('article/read/'.$row->id,'<img class="media-object" src="'.$row->image.'" alt="'.$row->title.'" width="140" height="96">') ?>
                </div>
                <div class="media-body">
                    <h5 class="media-heading" title="<?php echo $row->title ?>"><?php echo anchor('article/read/'.$row->id,word_limiter($row->title,8)) ?></h5>
                    <p class="by-author">Penulis : <?php echo $row->author ?></p>
                </div>
            </div>
            <?php endforeach ?>
        </div>
        <div class="panel-footer">
            <?php echo $pagination ?>
        </div>    
    </div>
</div>
