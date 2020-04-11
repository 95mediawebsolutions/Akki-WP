<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>

<body>
    <!-- Header Area -->
    <header id="header">
        <div class="row m-0">
            <div class="col-3 bgcolor-black">
                <nav class="primary-nav navbar-expand-md">
                    <div class="site-title text-center text-light py-5">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand font-staat font-size-40 logo-text-center"><?php bloginfo( 'title' ); ?></a>
                        <p class="description text-uppercase font-os">
                        <?php echo get_theme_mod('set_freelancer_name', 'E.g John Doe');?>
                        </p>
                    </div>


                    <?php
            wp_nav_menu(array(
                'theme_location'    => 'akki_main_menu',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'd-flex flex-column',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ));
            ?>
                </nav>
            </div>
        </div>
        <button class="toggle-button"><span class="fas fa-bars fa-2x"></span></button>
        <div class="social">
            <span class="mr-3"><i class="fab fa-facebook-f"></i></span>
            <span class="mr-3"><i class="fab fa-twitter"></i></span>
            <span class="mr-3"><i class="fab fa-instagram"></i></span>
            <span class="mr-3"><i class="fab fa-youtube"></i></span>
        </div>
    </header>