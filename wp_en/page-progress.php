<?php
    /*
        Template Name: Progress Page
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
                <a href="<?php echo esc_url(home_url('/')); ?>">Главная</a> / <span><?php the_title(); ?></span>
            </div>
        </header>

        <div class="site-main__content">
            <div class="about">
                Страница находится в разработке
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