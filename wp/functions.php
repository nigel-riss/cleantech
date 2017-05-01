<?php
    function cleantech_theme_setup() {
        // Menu support
        register_nav_menus(array(
            'primary'   => __('Primary Menu')
        ));
    }

    add_action('after_setup_theme', 'cleantech_theme_setup');

    // Widget Locations
    function init_widgets($id) {
        register_sidebar(array(
            'name'  => 'News Sidebar',
            'id'    => 'sidebar',
            'before_widget' => '<div class="widget-news">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-news__title">',
            'after_title'   => '</h3>'
        ));

        register_sidebar(array(
            'name'  => 'Simple Sidebar',
            'id'    => 'simple-sidebar',
            'before_widget' => '<div class="widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget__title">',
            'after_title'   => '</h3>'
        ));
    }

    add_action('widgets_init', 'init_widgets');
?>