<?php
    get_header();
?>

<div class="wrapper">
    <div class="serv-buttons">
        <a class="button button--clean" href="#" onclick="printPage()">Pring</a>
        <a class="button button--clean button--ml-30" href="<?php echo esc_url(home_url('/')); ?>ask">Ask a Question</a>
    </div>

    <main class="site-main">
        <header class="site-main__header">
            <div class="site-main__breadcumbs">
                <a href="<?php echo esc_url(home_url('/')); ?>">Main</a> / <span>Search</span>
            </div>
        </header>

        <div class="site-main__content">
            <div class="search-page">
                <h2 class="search-page__title">
                    Search results:
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
                                Publish date: <?php echo get_the_date('F j, Y'); ?>
                            </div>
                        </header>

                        <div class="search-item__content">
                            <p class="search-item__text">
                                <?php the_excerpt(); ?>
                            </p>
                            <a class="search-item__more" href="<?php the_permalink(); ?>">
                                Read more <div class="icon-arrow"></div>
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
            Search
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