<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>
        <?php bloginfo('name'); ?>
    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,500,700&amp;amp;subset=cyrillic">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <?php wp_head(); ?>
</head>

<body>
    <header class="site-header">

        <div class="site-header__wrapper">
            <div class="search-n-lang">
                <div class="menu-icon">
                    <div class="menu-icon__middle"></div>
                </div>
                <div class="search"></div>
                <div class="language"></div>
            </div>
            <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png">
                </a>
            </div>
        </div>


        <nav class="main-nav">
            <?php
                $args = array(
                    'theme_location'      => 'primary',
                    'container'           => '',
                    'menu_class'          => 'main-nav__menu'
                );

                wp_nav_menu($args);
            ?>
        </nav>
    </header>