<div class="row">
	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="row row-heading" >
				    <h3>
				        <?php echo $article->title ?>
				    </h3>
				</div>	
				<?php echo $article->content ?>						
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="row row-heading" >
				    <h3>
				        BERITA LAINNYA
				    </h3>
				</div>
                <div class="row">
                	<div class="col-md-12">
	                    <ul class="media-list main-list">
	                      <?php foreach ($article_lain as $row): ?>
	                      	<?php if ($row->id != $article->id): ?>	                      		
		                        <li class="media">
		                          <div class="pull-left">
		                            <img class="media-object" src="<?php echo $row->image ?>" alt="..." width="150" height="90">
		                          </div>
		                          <div class="media-body">
		                            <h4 class="media-heading"><?php echo anchor('page/article/'.$row->id,$row->title) ?></h4>
		                            <p class="by-author">Penulis : <?php echo $row->author ?></p>
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
