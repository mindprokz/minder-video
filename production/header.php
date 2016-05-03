<!DOCTYPE html>
<html lang=ru>
<head>

	<meta charset="utf-8">

	<title>Главная</title>
	<meta name="description" content="">
	<meta name="Keywords" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri();?>/img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri();?>/img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri();?>/img/favicon/apple-touch-icon-114x114.png">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/bower_components/fancybox/source/jquery.fancybox.css">
</head>
<body <?php body_class(); ?>>

<div id="header">
	<nav>
		<div class="content">
			<div class="row">
					<div class="col-md-7 col-sm-12">
						<div class="menu">
							<a href="/mind" <?php echo ( is_home() ? 'class="active"' : ''); ?> >Главная</a>
							<a href="http://xn--e1aybc.kz/mind/work/" <?php echo ( is_page(7) ? 'class="active"' : ''); ?> >Наши работы</a>
							<a href="http://xn--e1aybc.kz/mind/reviews/" <?php echo ( is_page(10) ? 'class="active"' : ''); ?>>Отзывы клиентов</a>
							<a href="http://xn--e1aybc.kz/mind/articles/" 
								<?php echo ( is_page(12) ? 'class="active"' : is_single() ? 'class="active"' : '');?>>Статьи</a>
<!-- 							<a href="http://xn--e1aybc.kz/mind/contacts/">Контакты</a> -->
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="phone">
							<p>+7 701 <strong>808 80 08</strong></p>
							<a href="#">Заказать обратный звонок</a>
						</div>
					</div>
					<div class="col-md-2 col-sm-6">
						<div class="email">
							<p>Связаться по e-mail</p>
							<a href="mailto:hello@mindpro.kz">hello@mindpro.kz</a>
						</div>
					</div>
			</div>
		</div>
	</nav>
</div>
