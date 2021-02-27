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
                <h5 class="footer-menu-title">O nas</h5>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-primary-menu',
                    )
                );
                ?>
            </div>
            <div class="secondary-menu">
                <h5 class="footer-menu-title">Ubezpieczenia</h5>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-secondary-menu',
                    )
                );
                ?>
            </div>
            <div class="contact">
                <h5 class="footer-menu-title">Infolinia</h5>
                <span class="footer-menu-contact-info">+48 22 311 1234</span>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>

</html>