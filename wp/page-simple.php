<?php
    /*
        Template Name: Simple Page
    */

    get_header();
?>

<div class="wrapper">
    <div class="serv-buttons">
        <a class="button button--clean" href="#" onclick="printPage()">Печать</a>
        <a class="button button--clean button--ml-30" href="<?php echo esc_url(home_url('/')); ?>ask">Задать вопрос</a>
    </div>

    <main class="site-main">
        <header class="site-main__header">
            <div class="site-main__breadcumbs">
                Главная / <span><?php the_title(); ?></span>
            </div>
        </header>

        <div class="site-main__content">
            <div class="site-main__content-wrapper">
                <?php
                    if (have_posts()) {
                        the_post();
                        the_content(); 
                    }
                ?>
            </div>
        </div>
    </main>

    <aside class="side-nav">
        <h2 class="side-nav__title">
        
        </h2>
        <ul class="side-nav__menu">

        </ul>
    </aside>
</div>

<?php
    get_footer();
?>