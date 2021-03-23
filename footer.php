<?php

/**
 * The template for displaying the footer
 *
 */

?>
<footer>
    <div class="container">
        <div class="footer-content">
            <div class="primary-menu">
                <h5 class="footer-menu-title">
                    <?php echo __('O nas', 'awesometheme'); ?>
                </h5>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-primary-menu',
                    )
                );
                ?>
            </div>
            <div class="secondary-menu">
                <h5 class="footer-menu-title">
                    <?php echo __('Ubezpieczenia', 'awesometheme'); ?>
                </h5>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-secondary-menu',
                    )
                );
                ?>
            </div>
            <div class="contact">
                <h5 class="footer-menu-title">
                    <?php echo __('Infolinia', 'awesometheme'); ?>
                </h5>
                <span class="footer-menu-contact-info">
                    <a href="tel:+48 22 311 1234">+48 22 311 1234</a>
                </span>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>

</html>