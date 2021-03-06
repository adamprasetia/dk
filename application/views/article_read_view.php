<div class="row">
	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-body">
			    <h3><?php echo $article->title ?></h3>
				<?php echo $article->content ?>						
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				BERITA LAINNYA
			</div>
			<div class="panel-body">
                <div class="row">
                	<div class="col-md-12">
	                    <ul class="media-list main-list">
	                      <?php foreach ($article_lain as $row): ?>
	                      	<?php if ($row->id != $article->id): ?>	                      		
		                        <li class="media">
		                          <div class="pull-left">
		                            <img class="media-object" src="<?php echo $row->image ?>" alt="<?php echo $row->title ?>" width="140" height="96">
		                          </div>
		                          <div class="media-body">
		                            <h5 class="media-heading" title="<?php echo $row->title ?>"><?php echo anchor('article/read/'.$row->id,word_limiter($row->title,8)) ?></h5>
		                          </div>
		                        </li>                                
	                      	<?php endif ?>
	                      <?php endforeach ?>
	                    </ul>
                    </div>
                </div>   
			</div>					
		</div>					
	</div>
</div>
