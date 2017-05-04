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
            <div class="site-main__breadcumbs">
                <a href="<?php echo esc_url(home_url('/')); ?>">Главная</a> / <span>Новости</span>
            </div>
        </header>

        <div class="site-main__content">
            <div class="news-page">
                <?php
                    $args = array(
                        'category_name' => "news"
                    );

                    query_posts($args);

                    if(have_posts()) {
                        while(have_posts()) {
                            the_post();
                            // vars
                            $main_photo     = get_field('main-photo');
                            $advert         = get_field('advert');
                ?>

                    <article class="news-page-item">
                        <div class="news-page-item__image">
                            <img src="<?php echo $main_photo; ?>">
                        </div>

                        <div class="news-page-item__wrapper">
                            <header class="news-page-item__header">
                                <div class="news-page-item__day">
                                    <?php echo get_the_date('j'); ?>
                                </div>
                                <div class="news-page-item__date">
                                    <?php echo get_the_date('F, Y'); ?>
                                </div>
                                <h3 class="news-page-item__title">
                                    <?php the_title(); ?>
                                </h3>
                            </header>

                            <div class="news-page-item__content">
                                <div class="news-page-item__text">
                                    <?php echo $advert; ?>
                                </div>

                                <a class="news-page-item__more" href="<?php the_permalink(); ?>">
                                    Читать дальше <div class="icon-arrow"></div>
                                </a>
                            </div>
                        </div>
                    </article>

                <?php
                        }
                    }
                ?>
            </div>
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