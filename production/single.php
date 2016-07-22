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
				<a href="#">История создания</a>
				<a href="#">Полезная информация</a>
				<a href="#">Еще одна интересная история</a>
				<?php $tag = wp_tag_cloud('format=array' ); print_r($tag);?>
			</div>
		</div>
	</div>
</div>

<div id="page">
	<div class="content">
		<div class="row">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<? 
$category = get_the_category(); 

$main_ID = get_the_ID();
?>

			<div id="breadcrumps">
				<a href="http://mindpro-video.kz/articles/" class="active">Главная</a><span> &gt; </span>
				<a href="<?php echo 'http://тест.kz/mind/category/' . $category[count($category) - 1]->slug ?>" class="active"><? echo $category[count($category) - 1]->name ?></a><span> &gt; </span>
				<a><?php the_title(); ?></a>
			</div>

			<div id="news_full">
				
				<div class="col-md-8 col-sm-8" id="news_body">
					<h1><?php the_title(); ?></h1>
					<div class="news_body_img">
						<?php the_post_thumbnail('full')?>
						<div class="bottom_statistics">
							<span class="date"><i></i><?php the_time('j F Y'); ?></span>
							<span class="comments"><i></i>12</span>
							<span class="views"><i></i><?php echo do_shortcode("[post-views]");?></span>
						</div>
					</div>
					<?php the_content(); ?>
				</div>
<?php endwhile;?>
<?php endif; ?>
				<div class="col-md-4 col-sm-4" id="sidebar">

					<div id="subscribe">
						<h1>Подпишись на нашу рассылку</h1>
						<p>Стань одним из первых, кто будет в курсе новых новостей!</p>
						<form action="" method="post">
							<input type="text" placeholder="Ваше имя">
							<input type="text" placeholder="E-mail">
							<button type="submit">Подписаться на рассылку</button>
						</form>
					</div>

					<div id="similar">
						<h1>Похожие новости</h1>
							<?php
							$args = array(
								'post_type' => 'blog', //Типы посты
								'posts_per_page' => 5, //Постов на одной странице
								'category_name' => $category); //Категория постов
								//'offset' => 1,); //Публикация постов начнется начиная со 2-ого поста
							$lastBlog = new WP_Query($args);//Запрос ко всем постам подходящим под массив #args
							if( $lastBlog->have_posts() ):
								while($lastBlog->have_posts() ): $lastBlog->the_post(); ?>
									<!-- html template -->	
									<?php if($main_ID != get_the_ID() ): ?>	
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									<?php endif;?>	
								<?php endwhile;  //Вывод всех подходящих постов
							endif; 
							wp_reset_postdata();
							?>							
					</div>

					<div id="fb_widget" class="widgets col-md-12 col-sm-12 col-xs-4">
						<img src="<?php echo get_template_directory_uri();?>/img/blog/fb.png" alt="">
					</div>

					<div id="tw_widget" class="widgets col-md-12 col-sm-12 col-xs-4">
						<img src="<?php echo get_template_directory_uri();?>/img/blog/tw.png" alt="">
					</div>

					<div id="vk_widget" class="widgets col-md-12 col-sm-12 col-xs-4">
						<script type="text/javascript" src="//vk.com/js/api/openapi.js?121"></script>
						
						<!-- VK Widget -->
						<div id="vk_groups" style="display:inline;"></div>
						<script type="text/javascript">
						VK.Widgets.Group("vk_groups", {mode: 0, height: "400", color1: 'FFFFFF', color2: '2B587A', color3: '5B7FA6'}, 48257012);
						</script>						
					</div>

				</div>

			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>