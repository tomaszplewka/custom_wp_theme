<?php

/**
 * The header
 *
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="x-dns-prefetch-control" content="on"> -->
    <!-- Grab Lato Medium -->
    <link rel="stylesheet" href="https://use.typekit.net/nem8qyo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <!-- <link rel="dns-prefetch" href="//cdnjs.cloudflare.com" /> -->
    <!-- <link rel="dns-prefetch" href="https://use.fontawesome.com" /> -->
    <?php wp_head(); ?>
</head>

<body class="">

    <header>
        <div class="container">
            <nav>
                <div class="menu-logo">
                    <img class="menu-logo-img" src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.png" alt="twoje finanse logo">
                </div>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'header-primary-menu',
                    )
                );
                ?>
                <div class="mobile-menu">
                    <div class="menu-bars">
                        <i class="fas fa-bars"></i>
                    </div>
                    <div class="menu-times hidden">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
            </nav>
        </div>
    </header>