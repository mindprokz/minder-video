<div id="intro" class="container-fluid reviews_intro intro">
	<div class="content">
		<div class="col-md-4 col-sm-5 col-xs-6">
			<div class="logo">
				<a href="#"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt=""></a>
			</div>
			<div class="name">
				<p>Маркетинговая компания</p>
				<h3>Mindpro-group</h3>
			</div>
		</div>
		<div class="col-md-8 col-sm-7 col-xs-6">
			<h1 class="slogan">Создаем видео для роста продаж</h1>
		</div>
	</div>
</div>

<div class="reviews clear">
	<div class="content">
		<h2><strong>Отзывы</strong> клиентов</h2>
			<?php
			$args = array(	
				'post_type' => 'video_com', //Типы посты
				'posts_per_page' => 10, //Постов на одной странице
				'category_name' => 'comment'); //Категория постов
				//'offset' => 1,); //Публикация постов начнется начиная со 2-ого поста
			$lastBlog = new WP_Query($args);//Запрос ко всем постам подходящим под массив #args
			if( $lastBlog->have_posts() ):
				while($lastBlog->have_posts() ): $lastBlog->the_post(); ?>
				<!-- html template -->
					<div class="review clear">
						<div class="col-md-4 col-sm-12 clear">
							<div class="reviews_video">
								<a href="<?php echo(types_render_field( "comment_url", array('raw' => true) )); ?>" class="fancybox fancybox.iframe">
									<?php the_post_thumbnail('full'); ?>
<!-- 									<img src="<?php echo get_template_directory_uri();?>/img/reciews_video.png" alt="poster"> -->
									<img src="<?php echo get_template_directory_uri();?>/img/play_button.png" alt="play">
								</a>
								<h3><?php echo(types_render_field( "name_company", array('raw' => true) )); ?></h3>
								<h4><?php echo(types_render_field( "name_peop", array('raw' => true) )); ?></h4>
								<p><?php echo(types_render_field( "proffession", array('raw' => true) )); ?></p>
							</div>
						</div>
						<div class="col-md-8 col-sm-12 clear">
							<div class="review-text">
								<p><?php the_content();?></p>
								<p class="link_label">Сайт</p>
								<a href="<?php echo(types_render_field( "url_site", array('raw' => true) )); ?>"><?php echo(types_render_field( "url_site", array('raw' => true) )); ?></a>
								<p class="link_label">Видео</p>
								<a href="<?php echo(types_render_field( "video_url", array('raw' => true) )); ?>" class="fancybox fancybox.iframe"><?php echo(types_render_field( "video_header", array('raw' => true) )); ?></a>
							</div>
						</div>
					</div>				
				<?php endwhile;  //Вывод всех подходящих постов
			endif; 
			wp_reset_postdata();
    	?>
	</div>
</div>

<div class="form_section">
	<h3><strong>Заказать</strong> бесплатную консультацию</h3>
	<form id="application" action="mail.php" method="POST">
		<div class="content">
			<input type="text" placeholder="Ваше имя" name="name" required>
			<input type="text" placeholder="Телефон" name="email" required>
			<input type="text" placeholder="E-mail" name="telephone" required>
			<button>Отправить</button>
		</div>
	</form>
</div>
<div id="mail" class="not_visible_mail"></div>	


<!-- Local scripts -->
<script src="<?php echo get_template_directory_uri();?>/bower_components/fancybox/source/jquery.fancybox.pack.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/common.js"></script>	