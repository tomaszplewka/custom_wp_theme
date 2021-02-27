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
                    <h1 class="showcase-banner-text-title">Ubezpieczenie majątkowe</h1>
                    <p class="showcase-banner-text-subtitle">
                        Skontaktuj się z nami i skorzystaj <br id="showcase-banner-subtitle-br"> ze specjalnej oferty!
                    </p>
                    <div class="form-toggle-btn-wrapper">
                        <button type="button" class="btn">Zapisz się</button>
                    </div>
                </div>
                <div class="showcase-banner-form">
                    <form action="" method="POST">
                        <span class="close">&#10540;</span>
                        <h3 class="form-title">Podaj dane kontaktowe, a my przygotujemy najlepszą ofertę</h3>
                        <div class="input-wrapper">
                            <input type="text" name="full-name" id="full-name" placeholder="Imię i nazwisko" required>
                        </div>
                        <div class="input-wrapper">
                            <input type="email" name="email" id="email" placeholder="Adres e-mail" required>
                        </div>
                        <div class="input-wrapper">
                            <input type="tel" id="phone" name="phone" pattern="[0-9]{3} [0-9]{3} [0-9]{3}" placeholder="Nr telefonu" required>
                        </div>
                        <div class="input-wrapper inline">
                            <input type="text" name="city" id="city" placeholder="Miejscowość" required>
                            <input type="text" name="postal-code" id="postal-code" placeholder="Kod pocztowy" required>
                        </div>
                        <div class="clause-wrapper">
                            <label for="clause">
                                <input type="checkbox" name="clause" id="clause" required>
                                <span></span>
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                            </label>
                        </div>
                        <div class="submit-wrapper">
                            <button type="submit" class="btn">Wyślij</button>
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
                <h2 class="main-section-title">Ubezpieczenia majątkowe</h2>
                <h4 class="main-section-subtitle">Co obejmują?</h4>
            </div>
            <div class="main-section-text-wrapper">
                <p class="main-section-text-bold">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                </p>
                <p>
                    Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
                </p>
            </div>
            <div class="main-section-btn-wrapper">
                <button type="button" class="btn">Zamów ubezpieczenie</button>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
