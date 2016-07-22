<header id="blog">
	<div class="content">
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-6">
				<a href="#" class="logo">
					<img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="">
				</a>
				<div class="name">
					<p>Маркетинговая компания</p>
					<h3>Mindpro-Group</h3>
				</div>
			</div>
			<div class="col-md-8 col-sm-6 col-xs-6">
				<h1 class="blog_title">Блог</h1>
				<div class="speech_bubble">
					<img src="<?php echo get_template_directory_uri();?>/img/speech.png" alt="">
				</div>
			</div>
		</div>
	</div>
</header>

<div id="menu">
	<div class="content">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<a href="#">История создания</a>
				<a href="#">Полезная информация</a>
				<a href="#">Еще одна интересная история</a>
			</div>
		</div>
	</div>
</div>

<div id="page">
	<div class="content">
		<div class="row">
			<div class="col-md-7 col-sm-12">
				<div class="slider">
					<span class="favorite"><img src="<?php echo get_template_directory_uri();?>/img/blog/icons.png" alt="icons"> Лучшее за месяц</span>
					<img src="<?php echo get_template_directory_uri();?>/img/blog/slider.png" alt="">
					<div id="controllers">
						<svg class="controllers left">
							<path d="M 27 0 l -25 20 l 32 26"></path>
						</svg>
						<svg class="controllers right">
							<path d="M -2 0 l 25 20 l -35 30"></path>
						</svg>
					</div>
					<h1 class="slider_title">Как получать из Facebook заявки по 100 рублей в школу фигурного катания — кейс Marketeam</h1>
				</div>
			</div>
			<div class="col-md-5 col-sm-12">
				<div class="latest_news">
					<h1>Последние посты</h1>
					<?php
							$args = array(
								'post_type' => 'blog', //Типы посты
								'posts_per_page' => 3, //Постов на одной странице
								'category_name' => 'blog'); //Категория постов
								//'offset' => 1,); //Публикация постов начнется начиная со 2-ого поста
							$lastBlog = new WP_Query($args);//Запрос ко всем постам подходящим под массив #args
							if( $lastBlog->have_posts() ):
								while($lastBlog->have_posts() ): $lastBlog->the_post(); ?>
									<!-- html template -->
										<a href="<?php the_permalink(); ?>">
											<div class="last_news_post">
												<div class="img_wrapper">
													<?php the_post_thumbnail('medium');?>
												</div>
												<p><?php the_title(); ?></p>
											</div>
										</a>	
								<?php endwhile;  //Вывод всех подходящих постов
							endif; 
							wp_reset_postdata();
					?>	
				</div>
			</div>
			<div class="clear"></div>
			<div id="news">
				<?php
				$args = array(
					'post_type' => 'blog', //Типы посты
					'posts_per_page' => 3, //Постов на одной странице
					'category_name' => 'blog'); //Категория постов
					//'offset' => 1,); //Публикация постов начнется начиная со 2-ого поста
				$lastBlog = new WP_Query($args);//Запрос ко всем постам подходящим под массив #args
				if( $lastBlog->have_posts() ):
					while($lastBlog->have_posts() ): $lastBlog->the_post(); ?>
					<!-- html template -->	
					<div class="col-md-4 col-sm-6">
						<a href="<?php the_permalink(); ?>">
							<div class="news_block">
								<div class="wrapper">
									<?php the_post_thumbnail('full')?>
								</div>		
								<span class="date"><i></i><?php the_time('j F Y'); ?></span>
								<span class="comments"><i></i>12</span>
								<span class="views"><i></i><?php echo do_shortcode("[post-views]");?></span>
								<p><?php the_title(); ?></p>
							</div>
						</a>
					</div>					
					<?php endwhile;  //Вывод всех подходящих постов
				endif; 
				wp_reset_postdata();
				?>
			</div>

<!--
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div id="load_more">
					<button>Загрузить еще</button>
				</div>
			</div>
-->

		</div>
	</div>
</div>
<div id="mail" class="not_visible_mail"></div>	


<!-- Local scripts -->
<script src="<?php echo get_template_directory_uri();?>/bower_components/fancybox/source/jquery.fancybox.pack.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/common.js"></script>	