<?php
/*
    Template Name: Home Page
*/

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
        <p class="hero__text">Наша организация занимается работой в сфере оптовой и разничной торговли оборудования систем энергообеспечения на базе возобновляемых источников энергии, а также систем водоочистки и переработки отходов</p><a class="button" href="about.html">О компании</a>
      </div>
    </section>
    <section class="services">
      <div class="services__main">
        <h2 class="services__title">Наши услуги</h2>
                <article class="service-item">
                  <div class="service-item__icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/project.png" alt="Проектирование"></div>
                  <h3 class="service-item__title">Проектирование</h3>
                  <p class="service-item__text">Проектирование и консалтинг проектов ВИЭ</p>
                </article>
                <article class="service-item">
                  <div class="service-item__icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/service.png" alt="Обслуживание"></div>
                  <h3 class="service-item__title">Обслуживание</h3>
                  <p class="service-item__text">Обслужинвание объектов ВИЭ, услуги ОЕМ</p>
                </article>
                <article class="service-item">
                  <div class="service-item__icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/delivery.png" alt="Поставка оборудования"></div>
                  <h3 class="service-item__title">Поставка оборудования</h3>
                  <p class="service-item__text">Поставка оборудования для проектов ВИЭ</p>
                </article>
                <article class="service-item">
                  <div class="service-item__icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/mount.png" alt="Монтаж оборудования"></div>
                  <h3 class="service-item__title">Монтаж оборудования</h3>
                  <p class="service-item__text">Монтаж оборудования и пуско-наладочные работы</p>
                </article><a class="button button--mt-40" href="#">Все услуги</a>
      </div>
      <div class="services__dir">
        <p class="services__subtitle">По направлениям</p>
                <article class="service-item-dir">
                  <div class="service-item-dir__icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/recycle.png" alt="Переработка отходов"></div>
                  <h3 class="service-item-dir__title">Переработка отходов</h3>
                </article>
                <article class="service-item-dir">
                  <div class="service-item-dir__icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/solar.png" alt="Возобновляемые источники энергии"></div>
                  <h3 class="service-item-dir__title">Возобновляемые источники энергии</h3>
                </article>
                <article class="service-item-dir">
                  <div class="service-item-dir__icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/water.png" alt="Водоочистка"></div>
                  <h3 class="service-item-dir__title">Водоочистка</h3>
                </article>
                <article class="service-item-dir">
                  <div class="service-item-dir__icon"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/icons/energy.png" alt="Повышение энерго-эффективности"></div>
                  <h3 class="service-item-dir__title">Повышение энерго-эффективности</h3>
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
                <div class="news-item__text">К таким выводам пришли члены Европейского парламента, обсуждавшие результаты надавнего скандала с концерном Фольксваген</div><a class="news-item__more" href="#">Читать дальше...</a>
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
                <div class="news-item__text">Шведское агентство по химическим веществам (KEMI) проведет в 2017 году исследование о расширении списка запрещенных косметических продуктов</div><a class="news-item__more" href="#">Читать дальше...</a>
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
                <div class="news-item__text">НЕФКО - Северная экологическая финансовая корпорация, подписала договор об инвестициях в свой первый сельскохозяйственный проект</div><a class="news-item__more" href="#">Читать дальше...</a>
              </div>
            </div>
          </article>
    </div>
  </section>
  <footer class="site-footer">
    <div class="contact-block">
      <h3 class="contact-block__title">Контакты</h3>
      <div class="contact">
        <div class="contact__name">Телефон:</div>
        <div class="contact__value"><a href="tel:+79114571223">+7 911 457-12-23</a></div>
      </div>
      <div class="contact">
        <div class="contact__name">Email:</div>
        <div class="contact__value"><a href="mailto: somemail@gmail.com">somemail@gmail.com</a></div>
      </div>
    </div>
    <div class="copyrights">&copy;  <span class="copyrights--blue">Чистые Технологии</span> 2017. </div>
  </footer>
</body>