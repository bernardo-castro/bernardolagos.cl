<?php ?>

<?php wp_head(); ?>
<!DOCTYPE html>
<!-- saved from url=(0058)http://paul-themes.com/html/jonny/home-fullpage.html#page1 -->
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="google-site-verification" content="mx85L2SqKkZQdKrYBiT8X44-LNgEJ--HcBgz-ma0VC8" />
    <link rel="shortcut icon" href="<?php echo get_field('logo', get_the_ID())['url'] ?>">
    <link rel="apple-touch-icon" href="<?php echo get_field('logo', get_the_ID())['url'] ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_field('logo', get_the_ID())['url'] ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_field('logo', get_the_ID())['url'] ?>">
    <title><?php echo get_field('titulo', get_the_ID()) ?></title>

    <link href="<?php echo bloginfo('template_url'); ?>/css/style.css" rel="stylesheet" media="screen">
</head>
<body class="body-full-page pp-viewing-page1">
<div class="loader" style="display: none;">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>

<div class="click-capture"></div>

<div class="menu">
    <span class="close-menu icon-cross2 right-boxed"></span>
    <div class="menu-lang right-boxed">
        <a href="" class="active">Español</a>
        <!--<a href="http://paul-themes.com/html/jonny/home-fullpage.html" class="active">Eng</a>
        <a href="http://paul-themes.com/html/jonny/home-fullpage.html">Fra</a>
        <a href="http://paul-themes.com/html/jonny/home-fullpage.html">Ger</a>-->
    </div>
    <?php
    wp_nav_menu([
        'menu' =>'principal',
        'menu_class' => 'menu-list right-boxed'
    ]);

    ?>
    <!--<div class="menu-footer right-boxed">
        <div class="social-list">
            <a href="" class="icon ion-social-facebook"></a>
        </div>
    </div>-->
</div>

<header class="navbar navbar-2 navbar-white boxed">
    <div class="navbar-bg"></div>
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse"
            aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="brand" href="">
        <img class="brand-img" alt="" src="<?php echo get_field('logo', get_the_ID())['url'] ?>">
        <div class="brand-info">
            <div class="brand-name"><?php echo get_field('titulo', get_the_ID()) ?></div>
            <div class="brand-text">Trombonista</div>
        </div>
    </a>
    <!--<div class="social-list hidden-xs">
        <a href="" class="icon ion-social-facebook"></a>
    </div>-->
</header>
<!--<div class="copy-bottom white boxed">© Jonny 2017.</div>-->
<div class="lang-bottom white boxed">
    <div class="menu-lang">
        <a href="" class="active">Español</a>

<!--        <a href="http://paul-themes.com/html/jonny/home-fullpage.html" class="active">Eng</a>
        <a href="http://paul-themes.com/html/jonny/home-fullpage.html">Fra</a>
        <a href="http://paul-themes.com/html/jonny/home-fullpage.html">Ger</a>-->
    </div>
</div>