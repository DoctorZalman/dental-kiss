<?php defined('ABSPATH') || exit; ?>

<div class="main-top animate__animated animate__bounceInDown">
    <div class="container wrapMenu">
        <div class="header">
            <!-- logo -->
            <div class="logo">
                <a href="<?php echo home_url() ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.svg" alt="КІСС">
                </a>
            </div>
            <!-- //logo -->
            <div class="menu-wrapper">
                <!-- Link to open the modal -->
                <?php get_template_part('template-parts/contacts'); ?>
                <a href="#ex1" rel="modal:open" class="phone-mobile"><i class="fas fa-phone"></i></a>
                <!-- nav -->
                <div class="nav_w3ls">
                    <nav>
                        <?php
                        wp_nav_menu( [
                            'theme_location'  => 'nav_menu',
                            'container'       => 'null',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',

                        ] );
                        ?>
                    </nav>
                    <div class="mobileMenu">
                        <div class="mobileMenu_hamburger">
                            <span></span>
                        </div>
                        <div class="mobileMenu_hamburger-links">
                            <div class="mobileMenu_hamburger-link">
                                <?php
                                wp_nav_menu( [
                                    'theme_location'  => 'nav_menu',
                                    'container'       => 'null',
                                    'items_wrap'      => '<ul>%3$s</ul>',

                                ] );
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //nav -->
            </div>
        </div>
    </div>
</div>