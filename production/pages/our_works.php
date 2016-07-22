<div id="intro" class="container-fluid our_works_intro intro">
	<div class="content">
		<div class="col-md-5 col-sm-12">
			<div class="logo">
				<a href="#"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt=""></a>
			</div>
			<h1>Выберите <strong>сегмент</strong></h1>
		</div>
		<div class="col-md-7 col-sm-12">
			<div class="tags">
				<ul>
					<li><a href="#all" class="all filter active" onclick="filterClick(0, 'all');">Все</a></li>
					<li><a href="#short" class="tv filter" onclick="filterClick(1, 'short');">Рекламные ролики для ТВ</a></li>
					<li><a href="#long" class="about_company filter" onclick="filterClick(2, 'long');">Презентационные фильмы о компании</a></li>
					<li><a href="#insta" class="inst filter" onclick="filterClick(3, 'insta');">Видео для instagram</a></li>
					<li><a href="#smm" class="smm filter" onclick="filterClick(4, 'smm');">Видео для SMM</a></li>
					<li><a href="#sale" class="selling_videos filter" onclick="filterClick(5, 'sale');">Продающие видео (продуктов услуг)</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="works_blocks">
	<div class="content">
	<?php
/*
		$args = array(
			'post_type' => 'video', //Типы посты
			'posts_per_page' => 100, //Постов на одной странице
			'category_name' => 'video'); //Категория постов
			//'offset' => 1,); //Публикация постов начнется начиная со 2-ого поста
		$lastBlog = new WP_Query($args);//Запрос ко всем постам подходящим под массив #args
		if( $lastBlog->have_posts() ):
			while($lastBlog->have_posts() ): $lastBlog->the_post(); ?>
				<!-- html template -->
				<a class="item_grid clear fancybox fancybox.iframe" href="<?php echo(types_render_field( "url", array('raw' => true) )); ?>">
					<?php
					$result_size = types_render_field( "size_thumb", array('raw' => true) );
					if ($result_size == 'big'){
						echo('<div class="col-lg-6 col-md-6 col-sm-6 masonry">');							
					} else {
						echo('<div class="col-lg-3 col-md-3 col-sm-3 masonry">');			
					}?>
						<div class="work_block <?php echo(types_render_field( "size_thumb", array('raw' => true) )); ?>">
							<?php the_post_thumbnail('full'); ?>
							<div class="hover_eff">
								<h3><?php echo(types_render_field( "header", array('raw' => true) )); ?></h3>
								<h5><?php echo(types_render_field( "subheader", array('raw' => true) )); ?></h5>
								<div class="white_line"></div>
								<p><?php echo(types_render_field( "content", array('raw' => true) )); ?></p>
							</div>
						</div>
					</div>
				</a>	
			<?php endwhile;  //Вывод всех подходящих постов
		endif; 
		wp_reset_postdata();
*/
  ?>
  </div>
</div>
<div id="mail" class="not_visible_mail"></div>	

<!-- CDN scripts -->
<script src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
<script src="https://npmcdn.com/masonry-layout@4.0/dist/masonry.pkgd.min.js"></script>	

<!-- Without CDN scripts -->


<!-- Local scripts -->
<script src="<?php echo get_template_directory_uri();?>/bower_components/fancybox/source/jquery.fancybox.pack.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/common.js"></script>	
<script src="<?php echo get_template_directory_uri();?>/js/our_works.js"></script>
