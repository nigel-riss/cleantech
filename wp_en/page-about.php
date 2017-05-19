<?php
    /*
        Template Name: About Page
    */

    // corner image
    $corner_image = get_field("corner-image");

    get_header();
?>

<div class="wrapper">
    <div class="serv-buttons">
        <a class="button button--clean" href="#" onclick="printPage()">Print</a>
        <a class="button button--clean button--ml-30" href="<?php echo esc_url(home_url('/')); ?>ask">Ask a Question</a>
    </div>

    <main class="site-main">
        <header class="site-main__header">
            <div class="site-main__breadcumbs">
                <a href="<?php echo esc_url(home_url('/')); ?>">Main</a> / <span>About Us</span>
            </div>
        </header>

        <div class="site-main__content">
            <div class="about" style="background-image: url(<?php echo $corner_image; ?>);">
                <div class="about__wrapper">
                    <h2 class="about__title">Baltic Clean Technologies</h2>
                    
                    <?php
                        if (have_posts()) {
                            the_post();
                            the_content(); 
                        }
                    ?>

                    <!--<p class="about__signature"><strong>Директор: <em>Андрей Суленко</em></strong></p>-->
                </div>
            </div>
        </div>
    </main>

    <aside class="side-nav">
        <h2 class="side-nav__title">
            About Us
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