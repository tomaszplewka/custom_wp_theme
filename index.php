<?php

/**
 * The main template file
 *
 */

get_header();
?>

<section class="home-page showcase">
    <div class="showcase-banner">
        <div class="container">
            <div class="section-content">
                <div class="showcase-banner-text">
                    <h1 class="showcase-banner-text-title">
                        <?php echo __('Ubezpieczenie majątkowe', 'awesometheme'); ?>
                    </h1>
                    <p class="showcase-banner-text-subtitle">
                        <?php echo __('Skontaktuj się z nami i skorzystaj', 'awesometheme'); ?>
                        <br id="showcase-banner-subtitle-br">
                        <?php __('ze specjalnej oferty!', 'awesometheme'); ?>
                    </p>
                    <div class="form-toggle-btn-wrapper">
                        <button type="button" class="btn">
                            <?php echo __('Zapisz się', 'awesometheme'); ?>
                        </button>
                    </div>
                </div>
                <div class="showcase-banner-form">
                    <form action="" method="POST">
                        <span class="close">&#10540;</span>
                        <h3 class="form-title">
                            <?php echo __('Podaj dane kontaktowe, a my przygotujemy najlepszą ofertę', 'awesometheme'); ?>
                        </h3>
                        <div class="input-wrapper">
                            <input type="text" name="full-name" id="full-name" placeholder="<?php echo __('Imię i nazwisko', 'awesometheme'); ?>" required />
                        </div>
                        <div class="input-wrapper">
                            <input type="email" name="email" id="email" placeholder="<?php echo __('Adres e-mail', 'awesometheme'); ?>" required />
                        </div>
                        <div class="input-wrapper">
                            <input type="tel" id="phone" name="phone" pattern="[0-9]{3} [0-9]{3} [0-9]{3}" placeholder="<?php echo __('Nr telefonu', 'awesometheme'); ?>" required />
                        </div>
                        <div class="input-wrapper inline">
                            <input type="text" name="city" id="city" placeholder="<?php echo __('Miejscowość', 'awesometheme'); ?>" required />
                            <input type="text" name="postal-code" id="postal-code" placeholder="<?php echo __('Kod pocztowy', 'awesometheme'); ?>" required />
                        </div>
                        <div class="clause-wrapper">
                            <label for="clause">
                                <input type="checkbox" name="clause" id="clause" required>
                                <span></span>
                                <?php echo __('Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', 'awesometheme'); ?>
                            </label>
                        </div>
                        <div class="submit-wrapper">
                            <button type="submit" class="btn">
                                <?php echo __('Wyślij', 'awesometheme'); ?>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home-page main-section">
    <div class="container">
        <div class="section-content">
            <div class="main-section-title-wrapper">
                <h2 class="main-section-title">
                    <?php echo __('Ubezpieczenia majątkowe', 'awesometheme'); ?>
                </h2>
                <h4 class="main-section-subtitle">
                    <?php echo __('Co obejmują?', 'awesometheme'); ?>
                </h4>
            </div>
            <div class="main-section-text-wrapper">
                <p class="main-section-text-bold">
                    <?php echo __('Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.', 'awesometheme'); ?>
                </p>
                <p>
                    <?php echo __('Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr.', 'awesometheme'); ?>
                </p>
            </div>
            <div class="main-section-btn-wrapper">
                <button type="button" class="btn">
                    <?php echo __('Zamów ubezpieczenie', 'awesometheme'); ?>
                </button>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
