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
    
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('stylesheet_directory'); ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('stylesheet_directory'); ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('stylesheet_directory'); ?>/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('stylesheet_directory'); ?>/manifest.json">
    <link rel="mask-icon" href="<?php bloginfo('stylesheet_directory'); ?>/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

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
                        <input class="search__input" name="s" type="text" placeholder="Search">
                        <button class="search__button" type="submit">
                            Search <div class="icon-search"></div>
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
                    <div class="header-contact__phone">
                        <a href="tel:<?php echo the_field("phone-link", 36); ?>"><?php echo the_field("phone-view", 36); ?></a>
                    </div>

                    <div class="header-contact__email">
                        <a href="mailto: <?php echo the_field("email", 36); ?>"><?php echo the_field("email", 36); ?></a>
                    </div>
                </div>
                <div class="header-contact">
                    <div class="header-contact__title">Social Networks</div>
                    <div class="social">
                        <a class="icon-twitter" href="<?php echo the_field("twitter-url", 36); ?>">Twitter</a>
                        <a class="icon-facebook" href="<?php echo the_field("facebook-url", 36); ?>">Facebook</a>
                        <a class="icon-linkedin" href="<?php echo the_field("linkedin-url", 36); ?>">LinkedIn</a>
                        <a class="icon-gplus" href="<?php echo the_field("google-plus-url", 36); ?>">Google+</a>
                    </div>
                </div>
            </div>
        </div>


        <nav class="main-nav main-nav--main">
            <div class="main-nav__home">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <div class="icon-home" style="font-size: 1.25rem; margin-top: -3px;"></div>
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