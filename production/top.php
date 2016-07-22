<!DOCTYPE html>
<html lang=ru>
<head>

    <meta charset="utf-8">

    <title>Главная</title>
    <meta name="description" content="">
    <meta name="Keywords" content="">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- 	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> -->

    <link rel="shortcut icon" href="http://mindpro.kz/sites/default/files/favicon_3.png"
          type="image/x-icon">
    <link rel="apple-touch-icon" href="http://mindpro.kz/sites/default/files/favicon_3.png">
    <link rel="apple-touch-icon" sizes="72x72"
          href="http://mindpro.kz/sites/default/files/favicon_3.png">
    <link rel="apple-touch-icon" sizes="114x114"
          href="http://mindpro.kz/sites/default/files/favicon_3.png">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="<?php echo get_template_directory_uri(); ?>/bower_components/fancybox/source/jquery.fancybox.css">

    <!-- 	CDN scripts -->

    <script src="https://code.jquery.com/jquery-2.2.3.min.js"
            integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>
</head>
<body <?php body_class(); ?>>

<div id="header">
    <nav>
        <div class="content">
            <div class="row">
                <div class="col-md-7 col-sm-12">
                    <div class="menu">
                        <a href="/" <?php echo(is_home() ? 'class="active"' : ''); ?> >Главная</a>
                        <a href="http://mindpro-video.kz/work/" <?php echo(is_page(7) ? 'class="active"' : ''); ?> >Наши
                            работы</a>
                        <a href="http://mindpro-video.kz/reviews/" <?php echo(is_page(9) ? 'class="active"' : ''); ?>>Отзывы
                            клиентов</a>
                        <a href="http://mindpro-video.kz/blog/"
                            <?php echo(is_page(11) ? 'class="active"' : is_single() ? 'class="active"' : ''); ?>>Статьи</a>
                        <!-- 							<a href="http://mindpro-video.kz/contacts/">Контакты</a> -->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="phone">
                        <?php
                        $reff = $_SERVER['HTTP_REFERER'];
                        $time = time() + 3600;
                        if (strpos($reff, 'yandex') || (isset($_GET['utm_source']) && $_GET['utm_source'] == 'yandex')) {
                            setcookie('source', 'yandex', $time, '/');
                            $_GET['source'] = 'yandex';
                        } else if (strpos($reff, 'google') || (isset($_GET['utm_source']) && $_GET['utm_source'] == 'google')) {
                            setcookie('source', 'google', $time, '/');
                            $_GET['source'] = 'google';
                        }
                        if (!isset($_GET['source'])) {
                            if (isset($_COOKIE['source']) && $_COOKIE['source'] == 'yandex') {
                                setcookie('source', 'yandex', $time, '/');
                                $_GET['source'] = 'yandex';
                            } else if (isset($_COOKIE['source']) && $_COOKIE['source'] == 'google') {
                                setcookie('source', 'google', $time, '/');
                                $_GET['source'] = 'google';
                            } else {
                                $_GET['source'] = '';
                            }
                        }
                        switch ($_GET['source']) {
                            case 'yandex':
                                $phone = '+7 7172 <strong>62 02 18</strong>';
                                break;
                            case 'google':
                                $phone = '+7 7172 <strong>62 02 19</strong>';
                                break;
                            default:
                                $phone = '+7 702 <strong>808 80 08</strong>';
                        }
                        ?>
                        <p><?php echo $phone; ?></p>
                        <a id="modal">Заказать обратный звонок</a>
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
