<div class="row">
    <div class="col-md-8">
        <?php if (isset($article)): ?>            
            <?php foreach ($article as $row): ?>
                <div class="panel">
                    <div class="panel-heading">
                        <h1 class="media-heading" title="<?php echo $row->title ?>"><?php echo anchor('article/read/'.$row->id,word_limiter($row->title,8)) ?></h1>
                    </div>
                    <div class="panel-body">
                        <?php echo anchor('article/read/'.$row->id,'<img class="media-object" src="'.$row->image.'" alt="'.$row->title.'" width="100%">') ?>                            
                    </div>
                </div>
            <?php endforeach ?>
            <?php if (isset($pagination)) {
                echo $pagination;
            }?>
        <?php else: ?>
            <p>Tidak ada artikel</p>
        <?php endif ?>
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