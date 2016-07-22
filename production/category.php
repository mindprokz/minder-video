<?php get_header(); ?>

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
				<a href="http://xn--e1aybc.kz/mind/articles/">Главная</a>
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

			<div id="breadcrumps">
				<a href="http://xn--e1aybc.kz/mind/articles/" class="active">Главная</a><span> &gt; </span>
				<a><?php single_cat_title( $prefix = '', $display = true ) ?></a>
			</div>
			<div id="news">
				<?php while(have_posts() ): the_post(); ?>
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
				wp_reset_postdata();
				?>
			</div>

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div id="page_num">
					<div class="col-md-1 col-sm-1">
						<a href="#" id="prev"><span></span>Назад</a>
					</div>
					<div class="col-md-10 col-sm-10">
						<ul>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
						</ul>
					</div>
					<div class="col-md-1 col-sm-1">
						<a href="#" id="next"><span></span>Далее</a>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<?php get_footer();?>