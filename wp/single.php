<?php
    get_header();
?>

<div class="wrapper">
    <div class="serv-buttons">
        <a class="button button--clean" href="#" onclick="printPage()">Печать</a>
        <a class="button button--clean button--ml-30" href="<?php echo esc_url(home_url('/')); ?>ask">Задать вопрос</a>
    </div>

    <main class="site-main">
        <header class="site-main__header">
            <div class="site-main__breadcumbs">Главная / <span>Новости</span></div>
        </header>

        <div class="site-main__content">
            <?php
                // vars
                $main_photo     = get_field('main-photo');
                $advert         = get_field('advert');

                if (have_posts()) {
                    the_post();
            ?>

            <article class="news-post-page">
                <header class="news-post-page__header">
                    <div class="news-post-page__social">
                        <div class="social">
                            <a class="icon-twitter twitter-share-button" href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>" title="Поделиться на Twitter" target="_blank">Twitter</a>
                            <a class="icon-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" title="Поделиться на Facebook" target="_blank">Facebook</a>
                            <a class="icon-linkedin" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php if(is_home()){echo home_url();}else{the_permalink();} ?>" title="Поделиться на LinkedIn" target="_blank">LinkedIn</a>
                            <a class="icon-gplus" href="https://plus.google.com/share?url=<?php esc_url(the_permalink()); ?>" title="Поделиться на Google+" target="_blank">Google+</a>
                        </div>

                        <div class="news-post-page__print">
                            <a class="icon-print" href="#" onclick="printPage()"></a>
                        </div>
                    </div>

                    <h2 class="news-post-page__title">
                        <?php the_title(); ?>
                    </h2>

                    <div class="news-post-page__advert">
                        <?php echo($advert); ?>
                    </div>

                    <div class="news-post-page__image">
                        <img src="<?php echo($main_photo); ?>">
                    </div>
                </header>

                <div class="news-post-page__content">
                    <div class="news-post-page__text">
                        <?php the_content(); ?>
                    </div>

                    <div class="news-post-page__source">Источник: <a href="#">Парламентская газета</a></div>
                </div>

                <div class="news-post-page__also"></div>
            </article>

            <?php
                }
            ?>
        </div>
    </main>

    <aside class="side-nav">
        <h2 class="side-nav__title">
            Новости
        </h2>

        <?php 
            if(is_active_sidebar('sidebar')) {
                dynamic_sidebar('sidebar');
            }
        ?>
    </aside>
</div>

<?php
    get_footer();
?>