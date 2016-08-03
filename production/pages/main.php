<div id="intro" class="container-fluid intro">
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

<div class="main-page col-md-12">
	<div class="content">
		<div class="col-md-6 col-sm-6">
			<ul>
				<li><a href="http://mindpro-video.kz/works/#short">Рекламные ролики для ТВ</a></li>
				<li><a href="http://mindpro-video.kz/works/#long">Презентационные фильмы о компании</a></li>
				<li><a href="http://mindpro-video.kz/works/#sale">Продающие видео (продуктов и услуг)</a></li>
				<li><a href="http://mindpro-video.kz/works/#insta">Видео для <span>Instagram</span></a></li>
				<li><a href="http://mindpro-video.kz/works/#smm">Видео для SMM</a></li>
				<li><a href="http://mindpro-video.kz/reviews/">Видео отзывы</a></li>
			</ul>
		</div>
		<div class="col-md-6 col-sm-6">
			<div class="video">
				<a href="https://www.youtube.com/embed/n788MNtJifg?autoplay=1" class="fancybox fancybox.iframe">
					<img src="http://mindpro-group.com/img/place.jpg" alt="video">
					<img src="http://mindpro-video.kz/wp-content/themes/mindpro_video_theme/img/play_button.png" class="play">
				</a>
			</div>
		</div>
	</div>
</div>

<div class="clear"></div>

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

<div class="works">
	<div class="container">
		<h1>Наши работы</h1>
			<div class="row">

				<div class="section clear">
					<div class="title">
						<h3>30 секундные ролики для ТВ</h3>
						<a href="http://mindpro-video.kz/works/#short">Смотреть все ролики раздела</a>
					</div>
				<?php
					$args = array(
						'post_type' => 'video', //Типы посты
						'posts_per_page' => 4, //Постов на одной странице
						'category_name' => 'shorting'); //Категория постов
						//'offset' => 1,); //Публикация постов начнется начиная со 2-ого поста
					$lastBlog = new WP_Query($args);//Запрос ко всем постам подходящим под массив #args
					if( $lastBlog->have_posts() ):
						while($lastBlog->have_posts() ): $lastBlog->the_post(); ?>
<!-- html template -->
							<div class="col-md-3 col-sm-6 col-xs-6">
								<div class="work_video">
									<a href="<?php echo(types_render_field( "url", array('raw' => true) )); ?>" class="fancybox fancybox.iframe">
										<? the_post_thumbnail('medium'); ?>
										<img src="<?php echo get_template_directory_uri();?>/img/play_button.png" alt="play">
									</a>
									<h3><? echo(types_render_field( "header", array('raw' => true) )); ?></h3>
								</div>
							</div>
						<?php endwhile;  //Вывод всех подходящих постов
					endif;
					wp_reset_postdata();
    		?>
    	</div>

			<div class="section clear">
				<div class="title">
					<h3>Презентационные фильмы о компании</h3>
					<a href="http://mindpro-video.kz/works/#long">Смотреть все ролики раздела</a>
				</div>
				<?php
					$args = array(
						'post_type' => 'video', //Типы посты
						'posts_per_page' => 4, //Постов на одной странице
						'category_name' => 'longing'); //Категория постов
						//'offset' => 1,); //Публикация постов начнется начиная со 2-ого поста
					$lastBlog = new WP_Query($args);//Запрос ко всем постам подходящим под массив #args
					if( $lastBlog->have_posts() ):
						while($lastBlog->have_posts() ): $lastBlog->the_post(); ?>
<!-- html template -->
							<div class="col-md-3 col-sm-6 col-xs-6">
								<div class="work_video">
									<a href="<?php echo(types_render_field( "url", array('raw' => true) )); ?>" class="fancybox fancybox.iframe">
										<? the_post_thumbnail('medium'); ?>
										<img src="<?php echo get_template_directory_uri();?>/img/play_button.png" alt="play">
									</a>
									<h3><? the_title(); ?></h3>
								</div>
							</div>
						<?php endwhile;  //Вывод всех подходящих постов
					endif;
					wp_reset_postdata();
    		?>
 			</div>
		</div>
	</div>
</div>

<div class="reviews">
	<div class="content">
		<h1>Видео отзывы клиентов</h1>
		<div class="col-md-12">
			<div class="row">
				<?php
					$args = array(
						'post_type' => 'video_com', //Типы посты
						'posts_per_page' => 6, //Постов на одной странице
						'category_name' => 'comment'); //Категория постов
						//'offset' => 1,); //Публикация постов начнется начиная со 2-ого поста
					$lastBlog = new WP_Query($args);//Запрос ко всем постам подходящим под массив #args
					if( $lastBlog->have_posts() ):
						while($lastBlog->have_posts() ): $lastBlog->the_post(); ?>
<!-- html template -->
							<div class="col-md-4 col-sm-6 col-xs-6">
								<div class="reviews_video">
									<a href="<?php echo(types_render_field( "comment_url", array('raw' => true) )); ?>" class="fancybox fancybox.iframe">
										<? the_post_thumbnail('medium'); ?>
										<img src="<?php echo get_template_directory_uri();?>/img/play_button.png" alt="play">
									</a>
									<h3><?php echo(types_render_field( "name_company", array('raw' => true) )); ?></h3>
									<h4><?php echo(types_render_field( "name_peop", array('raw' => true) )); ?></h4>
									<p><?php echo(types_render_field( "proffession", array('raw' => true) )); ?></p>
								</div>
							</div>
						<?php endwhile;  //Вывод всех подходящих постов
					endif;
					wp_reset_postdata();
    		?>
			</div>
		</div>
	</div>
</div>
<div id="mail" class="not_visible_mail"></div>


<!-- Local scripts -->
<script src="<?php echo get_template_directory_uri();?>/bower_components/fancybox/source/jquery.fancybox.pack.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/common.js"></script>
