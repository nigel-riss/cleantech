<footer class="site-footer">
    <div class="site-footer__wrapper">
        <div class="contact-block">
            <h3 class="contact-block__title">Contacts</h3>
            <div class="contact">
                <div class="contact__name">Phone:</div>
                <div class="contact__value">
                    <a href="tel:<?php echo the_field("phone-link", 36); ?>"><?php echo the_field("phone-view", 36); ?></a>
                </div>
            </div>

            <div class="contact">
                <div class="contact__name">Email:</div>
                <div class="contact__value">
                    <a href="mailto: <?php echo the_field("email", 36); ?>"><?php echo the_field("email", 36); ?></a>
                </div>
            </div>

            <div class="contact">
                <div class="contact__name">Address:</div>
                <div class="contact__value"><?php echo the_field("address-footer", 36); ?></div>
            </div>
        </div>


        <div class="copyrights">
            <div class="social">
                <a class="icon-twitter" href="<?php echo the_field("twitter-url", 36); ?>">Twitter</a>
                <a class="icon-facebook" href="<?php echo the_field("facebook-url", 36); ?>">Facebook</a>
                <a class="icon-linkedin" href="<?php echo the_field("linkedin-url", 36); ?>">LinkedIn</a>
                <a class="icon-gplus" href="<?php echo the_field("google-plus-url", 36); ?>">Google+</a>
            </div>

            &copy; <span class="copyrights--blue">Baltic Clean Technologies</span>
            <?php
                $currentYear = get_the_date('Y');
                if ($currentYear == 2017) {
                    echo $currentYear;
                } else {
                    echo "2017 – " . $currentYear;
                }
            ?>
        </div>
    </div>
</footer>


<?php wp_footer(); ?>

<script>function printPage() {window.print()};</script>

</body>

</html>