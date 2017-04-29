<?php
    get_header();
?>

<div class="wrapper">
    <div class="serv-buttons">
        <a class="button button--clean" href="#">Печать</a>
        <a class="button button--clean button--ml-30" href="#">Задать вопрос</a>
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
                            <a class="icon-twitter" href="">Twitter</a>
                            <a class="icon-facebook" href="">Facebook</a>
                            <a class="icon-linkedin" href="">LinkedIn</a>
                            <a class="icon-gplus" href="">Google+</a>
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
        <h2 class="side-nav__title">О Компании</h2>
        <ul class="side-nav__menu">
            <li><a href="#">Общая информация</a></li>
            <li><a href="#">Наша команда</a></li>
            <li><a href="#">Вакансии</a></li>
            <li><a href="#">Контакты</a></li>
        </ul>
    </aside>
</div>

<?php
    get_footer();
?>