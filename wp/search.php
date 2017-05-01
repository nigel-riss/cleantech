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
                Главная / <span>Поиск</span>
            </div>
        </header>

        <div class="site-main__content">
            <div class="search-page">
                <h2 class="search-page__title">
                    Результаты поиска:
                </h2>

                <?php
                    if(have_posts()) {
                        while(have_posts()) {
                            the_post();
                ?>

                    <article class="search-item">
                        <header class="search-item__header">
                            <h3 class="search-item__title">
                                <a href="<?php the_permalink(); ?>" >
                                    <?php the_title(); ?>
                                </a>
                            </h3>

                            <div class="search-item__date">
                                Дата публикации: <?php echo get_the_date('j F, Y'); ?>
                            </div>
                        </header>

                        <div class="search-item__content">
                            <p class="search-item__text">
                                <?php the_excerpt(); ?>
                            </p>
                            <a class="search-item__more" href="<?php the_permalink(); ?>">
                                Читать дальше <div class="icon-arrow"></div>
                            </a>
                        </div>
                    </article>

                <?php
                        }
                    } else {
                ?>

                    <p>По вашему запросу ничего не найдено.</p>

                <?php
                    }
                ?>
            </div>
        </div>
    </main>

    <aside class="side-nav">
        <h2 class="side-nav__title">
            Поиск
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