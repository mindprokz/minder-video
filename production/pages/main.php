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
				<li><a href="#">Рекламные ролики для ТВ</a></li>
				<li><a href="#">Презентационные фильмы о компании</a></li>
				<li><a href="#">Продающие видео (продуктов и услуг)</a></li>
				<li><a href="#">Видео для <span>Instagram</span></a></li>
				<li><a href="#">Видео для SMM</a></li>
				<li><a href="#">Видео отзывы</a></li>
			</ul>
		</div>
		<div class="col-md-6 col-sm-6">
			<div class="video">
				<img src="<?php echo get_template_directory_uri();?>/img/video.png" alt="">
			</div>
		</div>
	</div>
</div>

<div class="clear"></div>

<div class="form_section">
	<h3><strong>Заказать</strong> бесплатную консультацию</h3>
	<form action="" method="POST">
		<div class="content">
			<input type="text" placeholder="Ваше имя" name="name" required="">
			<input type="text" placeholder="Телефон" name="email" required="">
			<input type="text" placeholder="E-mail" name="telephone" required="">
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
						<a href="#">Смотреть все ролики раздела</a>
					</div>
				<?php
					$args = array(
						'post_type' => 'video', //Типы посты
						'posts_per_page' => 4, //Постов на одной странице
						'category_name' => 'short'); //Категория постов
						//'offset' => 1,); //Публикация постов начнется начиная со 2-ого поста
					$lastBlog = new WP_Query($args);//Запрос ко всем постам подходящим под массив #args
					if( $lastBlog->have_posts() ):
						while($lastBlog->have_posts() ): $lastBlog->the_post(); ?>
<!-- html template -->
							<div class="col-md-3 col-sm-6 col-xs-6">
								<div class="work_video">
									<a href="<?php echo(types_render_field( "url", array('raw' => true) )); ?>">
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
					<a href="#">Смотреть все ролики раздела</a>
				</div>
				<?php
					$args = array(
						'post_type' => 'video', //Типы посты
						'posts_per_page' => 4, //Постов на одной странице
						'category_name' => 'long'); //Категория постов
						//'offset' => 1,); //Публикация постов начнется начиная со 2-ого поста
					$lastBlog = new WP_Query($args);//Запрос ко всем постам подходящим под массив #args
					if( $lastBlog->have_posts() ):
						while($lastBlog->have_posts() ): $lastBlog->the_post(); ?>
<!-- html template -->
							<div class="col-md-3 col-sm-6 col-xs-6">
								<div class="work_video">
									<a href="<?php echo(types_render_field( "url", array('raw' => true) )); ?>">
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
						'post_type' => 'comment', //Типы посты
						'posts_per_page' => 4, //Постов на одной странице
						'category_name' => 'comment'); //Категория постов
						//'offset' => 1,); //Публикация постов начнется начиная со 2-ого поста
					$lastBlog = new WP_Query($args);//Запрос ко всем постам подходящим под массив #args
					if( $lastBlog->have_posts() ):
						while($lastBlog->have_posts() ): $lastBlog->the_post(); ?>
<!-- html template -->
							<div class="col-md-4 col-sm-6 col-xs-6">
								<div class="reviews_video">
									<a href="#">
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
				<!--
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="reviews_video">
						<a href="#">
							<img src="<?php echo get_template_directory_uri();?>/img/reciews_video.png" alt="poster">
							<img src="<?php echo get_template_directory_uri();?>/img/play_button.png" alt="play">
						</a>
						<h3>ТОО «Сантехпром»</h3>
						<h4>Инна Владимировна</h4>
						<p>Заместитель генерального директора</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="reviews_video">
						<a href="#">
							<img src="<?php echo get_template_directory_uri();?>/img/reciews_video.png" alt="poster">
							<img src="<?php echo get_template_directory_uri();?>/img/play_button.png" alt="play">
						</a>
						<h3>ТОО «Сантехпром»</h3>
						<h4>Инна Владимировна</h4>
						<p>Заместитель генерального директора</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="reviews_video">
						<a href="#">
							<img src="<?php echo get_template_directory_uri();?>/img/reciews_video.png" alt="poster">
							<img src="<?php echo get_template_directory_uri();?>/img/play_button.png" alt="play">
						</a>
						<h3>ТОО «Сантехпром»</h3>
						<h4>Инна Владимировна</h4>
						<p>Заместитель генерального директора</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="reviews_video">
						<a href="#">
							<img src="<?php echo get_template_directory_uri();?>/img/reciews_video.png" alt="poster">
							<img src="<?php echo get_template_directory_uri();?>/img/play_button.png" alt="play">
						</a>
						<h3>ТОО «Сантехпром»</h3>
						<h4>Инна Владимировна</h4>
						<p>Заместитель генерального директора</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-6">
					<div class="reviews_video">
						<a href="#">
							<img src="<?php echo get_template_directory_uri();?>/img/reciews_video.png" alt="poster">
							<img src="<?php echo get_template_directory_uri();?>/img/play_button.png" alt="play">
						</a>
						<h3>ТОО «Сантехпром»</h3>
						<h4>Инна Владимировна</h4>
						<p>Заместитель генерального директора</p>
					</div>
				</div>
-->
			</div>
		</div>
	</div>
</div>