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

			<div id="breadcrumps">
				<a href="#" class="active">Главная</a><span> &gt; </span>
				<a href="#" class="active">История создания</a><span> &gt; </span>
				<a href="#">Как получить из Facebook по 100 рублей в школу фигурного катагия - кейс Marketeam</a>
			</div>

			<div id="news_full">

				<div class="col-md-8 col-sm-8" id="news_body">
					<h1><?php the_title(); ?></h1>
					<div class="news_body_img">
						<img src="<?php echo get_template_directory_uri();?>/img/blog/news_body.png" alt="">
						<div class="bottom_statistics">
							<span class="date"><i></i><?php the_time('j F Y'); ?></span>
							<span class="comments"><i></i>12</span>
							<span class="views"><i></i>1300</span>
						</div>
					</div>
					<div><?php the_content(); ?></div>	
					<h3>Генеральный директор SendPulse Константин Макаров написал для «Нетологии» колонку, в которой подробно рассказал о push-уведомлениях для сайтов и как они помогают бизнесу.</h3>
					<p>В 2015 году мир увидел новый канал общения с посетителями сайта – браузерные push-уведомления.</p>
					<p>По своей сути — это короткие текстовые сообщения длинной до 200 знаков, которые появляются всплывающим окном в углу рабочего стола (правый нижний для Google Chrome, правый верхний для Apple Safari).</p>
					<img src="<?php echo get_template_directory_uri();?>/img/blog/news_body_img1.png" alt="">
					<p>По сравнению с уже привычными email-рассылками и СМС, push-уведомления имеют ряд преимуществ.</p>
					<p>Быстрая подписка. На сайте появляется всплывающее окно, которое запрашивает разрешение на отправку уведомлений. Один клик — и подписка произошла.</p>
					<img src="<?php echo get_template_directory_uri();?>/img/blog/news_body_img2.png" alt="">
					<p><strong>Исключена возможность отправки спама.</strong>В момент подписки за пользователем сети закрепляется шифрованный код — токен, который зависит от типа устройства, с которого был переход на сайт, браузера и домена самого сайта. Скопировать такой код или перенести на другой проект технически невозможно. Подписчик получит информацию только от того сайта, в уведомлениях от которого он заинтересован.</p>
					<p><strong>Высокий уровень просматриваемости.</strong>В отличии от email рассылок или SMS, которые еще нужно открыть, текст сообщения push-уведомления сразу появляется перед глазами. К тому же, воспринять информацию с него и сделать переход по ссылке гораздо проще, а значит и посещаемость сайта возрастет.</p>
					<h2>Как использовать возможности push-уведомлений для продвижения проектов</h2>
				</div>

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
						<a href="#">Работа с «портретом» аудитории: как настроить персонализированную…</a>
						<a href="#">Как выбрать каналы трафика для интернет-магазинов с узкой нишей</a>
						<a href="#">3 малоизвестных аналитических…</a>
						<a href="#">5 удобных сервисов для постинга в социальных сетях</a>
						<a href="#">Работа с «портретом» аудитории: как настроить персонализированную…</a>
					</div>

					<div id="fb_widget" class="widgets col-md-12 col-sm-12 col-xs-4">
						<img src="<?php echo get_template_directory_uri();?>/img/blog/fb.png" alt="">
					</div>

					<div id="tw_widget" class="widgets col-md-12 col-sm-12 col-xs-4">
						<img src="<?php echo get_template_directory_uri();?>/img/blog/tw.png" alt="">
					</div>

					<div id="vk_widget" class="widgets col-md-12 col-sm-12 col-xs-4">
						<img src="<?php echo get_template_directory_uri();?>/img/blog/vk.png" alt="">
					</div>

				</div>

			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>