<?php
    /*
        Template Name: Contacts Page
    */

    get_header();

    // contact info
    $address        = get_field('address');
    $email          = get_field('email');
    $phone_link     = get_field('phone-link');
    $phone_view     = get_field('phone-view');
    $schedule       = get_field('schedule');
    $map_link       = get_field('map-link');

    // social
    $twitter_url        = get_field('twitter-url');
    $facebook_url       = get_field('facebook-url');
    $linkedin_url       = get_field('linkedin-url');
    $google_plus_url    = get_field('goolge-plus-url');
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
            <div class="contacts-page">
                <div class="contacts-page__contacts">
                    <header class="contacts-page__header">
                        <h2 class="contacts-page__title">Контактная информация</h2>
                    </header>

                    <div class="contact-info">
                        <h3 class="contact-info__title">Адрес</h3>
                        <p class="contact-info__text">
                            <?php echo $address; ?>
                        </p>
                    </div>
                    <div class="contact-info">
                        <h3 class="contact-info__title">E-mail</h3>
                        <p class="contact-info__text">
                            <a href="mailto: <?php echo $email; ?>">
                                <?php echo $email; ?>
                            </a>
                        </p>
                    </div>

                    <div class="contact-info">
                        <h3 class="contact-info__title">Телефон</h3>
                        <p class="contact-info__text">
                            <a href="tel: <?php echo $phone_link; ?>">
                                <?php echo $phone_view; ?>
                            </a>
                        </p>
                    </div>

                    <div class="contact-info">
                        <h3 class="contact-info__title">Режим работы</h3>
                        <p class="contact-info__text">
                            <?php echo $schedule; ?>
                        </p>
                    </div>

                    <div class="contacts-page__text">
                        Если у вас остались вопросы по назначению наших услуг, отправте нам сообщение, заполнив форму и наши специалисты проконсультируют вас.
                    </div>
                    <div class="contacts-page__buttons"><a class="button" href="<?php echo esc_url(home_url('/')); ?>ask">Задать вопрос</a></div>
                </div>
                <div class="contacts-page__map">
                    <iframe src="<?php echo $map_link; ?>" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </main>

    <aside class="side-nav">
        <h2 class="side-nav__title">
            О компании
        </h2>

        <?php 
            if(is_active_sidebar('simple-sidebar')) {
                dynamic_sidebar('simple-sidebar');
            }
        ?>
    </aside>
</div>

<?php
    get_footer();
?>