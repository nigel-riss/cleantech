<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>
        <?php bloginfo('name'); ?>
    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,500,700&amp;amp;subset=cyrillic">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <?php wp_head(); ?>

    <style>
        .site-header {
            background-image: url('<?php echo the_field('header-bg-s', 6); ?>');
        }

        .site-footer {
            background-image: url('<?php echo the_field('footer-bg-s', 6); ?>');
        }

        @media(min-width: 700px) {
            .site-header {
                background-image: url('<?php echo the_field('header-bg', 6); ?>');
            }

            .site-footer {
                background-image: url('<?php echo the_field('footer-bg', 6); ?>');
            }
        }
    </style>
</head>

<body>
    <header class="site-header">

        <div class="site-header__wrapper">
            <div class="menu-icon">
                <div class="menu-icon__middle"></div>
            </div>

            <div class="search-n-lang">

                <div class="language"></div>

                <div class="search">
                    <form class="search__form" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                        <input class="search__input" name="s" type="text" placeholder="Поиск">
                        <button class="search__button" type="submit">
                            Найти <div class="icon-search"></div>
                        </button>
                    </form>
                </div>

            </div>

            <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png">
                </a>
            </div>

            <div class="site-header__contacts">
                <div class="header-contact">
                    <div class="header-contact__phone"><a href="tel:+74012390043">+7 (4012) 39-00-43</a></div>
                    <div class="header-contact__email"><a href="mailto:info@baltcleantech.com">info@baltcleantech.com</a></div>
                </div>
                <div class="header-contact">
                    <div class="header-contact__title">Мы в соцсетях</div>
                    <div class="social">
                        <a class="icon-twitter" href="">Twitter</a>
                        <a class="icon-facebook" href="">Facebook</a>
                        <a class="icon-linkedin" href="">LinkedIn</a>
                        <a class="icon-gplus" href="">Google+</a>
                    </div>
                </div>
            </div>
        </div>


        <nav class="main-nav main-nav--main">
            <div class="main-nav__home">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <div class="icon-home"></div>
                </a>
            </div>

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