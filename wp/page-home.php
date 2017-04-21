<?php
  /*
      Template Name: Home Page
  */

  // service 1
  $service_1        = get_field('service-1');
  $service_icon_1   = get_field('service-icon-1');
  $service_desc_1   = get_field('service-desc-1');
  // service 1
  $service_2        = get_field('service-2');
  $service_icon_2   = get_field('service-icon-2');
  $service_desc_2   = get_field('service-desc-2');
  // service 1
  $service_3        = get_field('service-3');
  $service_icon_3   = get_field('service-icon-3');
  $service_desc_3   = get_field('service-desc-3');
  // service 1
  $service_4        = get_field('service-4');
  $service_icon_4   = get_field('service-icon-4');
  $service_desc_4   = get_field('service-desc-4');

  // direction 1
  $dir_1            = get_field('dir-1');
  $dir_icon_1       = get_field('dir-icon-1');
  $dir_2            = get_field('dir-2');
  $dir_icon_2       = get_field('dir-icon-2');
  $dir_3            = get_field('dir-3');
  $dir_icon_3       = get_field('dir-icon-3');
  $dir_4            = get_field('dir-4');
  $dir_icon_4       = get_field('dir-icon-4');
  
  get_header();
?>


  <div class="hero-n-services">
    <section class="hero">
      <div class="hero__wrapper">
        <p class="hero__welcome">Добро пожаловать</p>
        <h1 class="hero__title">
          <?php bloginfo('name'); ?>
        </h1>
        <p class="hero__subtitle">
          <?php bloginfo('description'); ?>
        </p>
        <p class="hero__text">Наша организация занимается работой в сфере оптовой и разничной торговли оборудования систем энергообеспечения на
          базе возобновляемых источников энергии, а также систем водоочистки и переработки отходов</p><a class="button" href="about.html">О компании</a>
      </div>
    </section>

    <section class="services">
      <div class="services__main">
        <h2 class="services__title">Наши услуги</h2>

        <article class="service-item">
          <div class="service-item__icon">
            <img src=<?php echo($service_icon_1); ?> alt=<?php echo($service_1); ?>>
          </div>
          <h3 class="service-item__title">
            <?php echo($service_1); ?>
          </h3>
          <p class="service-item__text">
            <?php echo($service_desc_1); ?>
          </p>
        </article>

        <article class="service-item">
          <div class="service-item__icon">
            <img src=<?php echo($service_icon_2); ?> alt=<?php echo($service_2); ?>>
          </div>
          <h3 class="service-item__title">
            <?php echo($service_2); ?>
          </h3>
          <p class="service-item__text">
            <?php echo($service_desc_2); ?>
          </p>
        </article>

        <article class="service-item">
          <div class="service-item__icon">
            <img src=<?php echo($service_icon_3); ?> alt=<?php echo($service_3); ?>>
          </div>
          <h3 class="service-item__title">
            <?php echo($service_3); ?>
          </h3>
          <p class="service-item__text">
            <?php echo($service_desc_3); ?>
          </p>
        </article>

        <article class="service-item">
          <div class="service-item__icon">
            <img src=<?php echo($service_icon_4); ?> alt=<?php echo($service_4); ?>>
          </div>
          <h3 class="service-item__title">
            <?php echo($service_4); ?>
          </h3>
          <p class="service-item__text">
            <?php echo($service_desc_4); ?>
          </p>
        </article>

        <a class="button button--mt-40" href="#">Все услуги</a>
      </div>

      <div class="services__dir">
        <p class="services__subtitle">По направлениям</p>

        <article class="service-item-dir">
          <div class="service-item-dir__icon">
            <img src=<?php echo($dir_icon_1); ?> alt=<?php echo($dir_1); ?>>
          </div>
          <h3 class="service-item-dir__title">
            <?php echo($dir_1); ?>
          </h3>
        </article>

        <article class="service-item-dir">
          <div class="service-item-dir__icon">
            <img src=<?php echo($dir_icon_2); ?> alt=<?php echo($dir_2); ?>>
          </div>
          <h3 class="service-item-dir__title">
            <?php echo($dir_2); ?>
          </h3>
        </article>

        <article class="service-item-dir">
          <div class="service-item-dir__icon">
            <img src=<?php echo($dir_icon_3); ?> alt=<?php echo($dir_3); ?>>
          </div>
          <h3 class="service-item-dir__title">
            <?php echo($dir_3); ?>
          </h3>
        </article>

        <article class="service-item-dir">
          <div class="service-item-dir__icon">
            <img src=<?php echo($dir_icon_4); ?> alt=<?php echo($dir_4); ?>>
          </div>
          <h3 class="service-item-dir__title">
            <?php echo($dir_4); ?>
          </h3>
        </article>

      </div>
      <div class="services__projects">
        <p class="services__subtitle">Наши проекты</p>
        <p class="services__text">Перечень текущих и реализованных проектов нашей компанией</p><a class="button button--sand" href="#">Наши проекты</a>
      </div>
    </section>
  </div>

  <section class="news">
    <header class="news__header">
      <h2 class="news__title">Новости</h2>
    </header>
    <div class="news__wrapper">
      <article class="news-item">
        <div class="news-item__image"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/news/photo-1.jpg"></div>
        <div class="news-item__text-wrapper">
          <header class="news-item__header">
            <div class="news-item__day">07</div>
            <div class="news-item__date">февраля, 2017</div>
            <h3 class="news-item__title">Скандал с выбросами VW</h3>
          </header>
          <div class="news-item__content">
            <div class="news-item__text">К таким выводам пришли члены Европейского парламента, обсуждавшие результаты надавнего скандала с концерном Фольксваген</div>
            <a
              class="news-item__more" href="#">Читать дальше...</a>
          </div>
        </div>
      </article>
      <article class="news-item">
        <div class="news-item__image"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/news/photo-2.jpg"></div>
        <div class="news-item__text-wrapper">
          <header class="news-item__header">
            <div class="news-item__day">10</div>
            <div class="news-item__date">ферваля, 2017</div>
            <h3 class="news-item__title">Микропластик в Балтике</h3>
          </header>
          <div class="news-item__content">
            <div class="news-item__text">Шведское агентство по химическим веществам (KEMI) проведет в 2017 году исследование о расширении списка запрещенных
              косметических продуктов</div><a class="news-item__more" href="#">Читать дальше...</a>
          </div>
        </div>
      </article>
      <article class="news-item">
        <div class="news-item__image"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/news/photo-3.jpg"></div>
        <div class="news-item__text-wrapper">
          <header class="news-item__header">
            <div class="news-item__day">12</div>
            <div class="news-item__date">февраля, 2017</div>
            <h3 class="news-item__title">Новый проект фонда НЕФКО</h3>
          </header>
          <div class="news-item__content">
            <div class="news-item__text">НЕФКО - Северная экологическая финансовая корпорация, подписала договор об инвестициях в свой первый сельскохозяйственный
              проект</div><a class="news-item__more" href="#">Читать дальше...</a>
          </div>
        </div>
      </article>
    </div>
  </section>

<?php
  get_footer();
?>