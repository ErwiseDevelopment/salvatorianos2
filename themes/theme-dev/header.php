<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Theme Dev
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<style>
    header,
    {
    display: none !important;
    }
</style>

<body <?php body_class(); ?>>

    <div id="page" class="site">
        <!-- top social media -->
        <?php echo get_template_part('template-parts/content', 'top-social-media') ?>
        <!-- end top social media -->

        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', ''); ?></a>


        <header class="hidden relative bg-purple-800 py-4" x-data="{ open: false }">

            <div class="container">

                <nav class="flex justify-between">

                    <div>
                        <?php if (wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full')[0]) : ?>
                            <a href="<?php echo esc_url(home_url('/')); ?>">
                                <img src="<?php echo esc_url(wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full')[0]); ?>" alt="<?php echo esc_url(get_theme_mod('wp_bootstrap_starter_logo')); ?>">
                            </a>
                        <?php else : ?>
                            <a class="site-title" href="<?php echo esc_url(home_url('/')); ?>"><?php esc_url(bloginfo('name')); ?></a>
                        <?php endif; ?>
                    </div>

                    <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="l-navbar__hamburger"></span>
                    </button>

                    <button class="w-8 h-8 top-1/2 right-4 -translate-y-1/2 absolute flex lg:hidden justify-center items-center" x-on:click="open = true">
                        <svg class="w-6 h-6 fill-white" fill="none" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                        </svg>
                    </button>

                    <div class="hidden lg:block">

                        <?php
                        wp_nav_menu(array(
                            'theme_location'  => 'primary',
                            'container'       => 'div',
                            'container_id'    => 'main-nav',
                            'container_class' => 'flex-1 flex justify-end',
                            'menu_id'         => false,
                            'menu_class'      => 'w-full flex justify-end',
                            'depth'           => 3,
                            'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                            'walker'          => new wp_bootstrap_navwalker()
                        ));
                        ?>
                    </div>

                    <div class="w-full h-screen top-0 right-0 absolute lg:hidden bg-purple-500/80 pt-24" x-cloak x-show="open" x-transition:enter="transition duration-500" x-transition:enter-start="opacity-0 translate-x-full" x-transition:enter-end="opacity-100 translate-x-0" x-transition:leave="transition duration-500" x-transition:leave-start="opacity-100 translate-x-0" x-transition:leave-end="opacity-0 translate-x-full">

                        <button class="w-12 h-12 top-2 right-2 absolute flex justify-center items-center text-xl bg-white" x-on:click="open = false">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                            </svg>
                        </button>

                        <?php
                        wp_nav_menu(array(
                            'theme_location'  => 'primary',
                            'container'       => 'div',
                            'container_id'    => 'main-nav',
                            'container_class' => 'flex-1 flex justify-end',
                            'menu_id'         => false,
                            'menu_class'      => 'w-full flex flex-col lg:flex-row justify-end',
                            'depth'           => 3,
                            'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                            'walker'          => new wp_bootstrap_navwalker()
                        ));
                        ?>
                    </div>
                </nav>
            </div>
        </header><!-- #masthead -->

        <?php
        if (isset(get_pages_editorials_settings()[$post->post_name]['header_background'])) {
            $has_header_background = true;
        } else {
            $has_header_background = false;
        }
        ?>

        <div class="relative">
            <header class="<?php echo get_hidden_banner_title($post->post_type, $post->post_name) === true ? 'w-full top-0 left-0 absolute' : ''; ?> <?php echo $has_header_background ? 'header-background' : ''; ?>"
                style="<?php echo $has_header_background ? 'background-image: url(' . get_template_directory_uri() . '/resources/images/header-background.png)' : '' ?>">

                <div class="container flex flex-wrap">

                    <div class="w-3/12 relative">

                        <a class="w-[320px] h-[320px] -translate-y-32 rounded-full absolute flex justify-center items-end bg-[#E9E5DD] pb-16 z-10" href="<?php echo get_home_url(null, '/') ?>">
                            <img class="w-56" src="<?php echo get_template_directory_uri() ?>/resources/images/logo-salvatorianos.png" alt="Salvatorianos" />
                        </a>
                    </div>

                    <div class="w-9/12 flex flex-col">

                        <div class="h-16 mb-4">

                            <ul class="h-full grid grid-cols-4">

                                <li class="col-span-1 flex justify-end">
                                    <a class="w-[80px] h-full transition hover:opacity-90 rounded-tl-[9999px] rounded-bl-[9999px] flex justify-center items-center <?php echo $wp->request == '' ? 'bg-[#27225C]' : 'bg-[#8134F4]'; ?> py-4 px-6" href="<?php echo get_home_url(null, '/') ?>">
                                        <img class="w-full h-full" src="<?php echo get_template_directory_uri() ?>/resources/images/icon-home.png" alt="Home - Salvatoriano" />
                                    </a>
                                </li>

                                <li class="col-span-1">
                                    <a class="main-nav-link <?php echo $wp->request == 'institucional' ? 'is-active' : ''; ?> bg-[#549D2C]" href="<?php echo get_home_url(null, '/institucional') ?>">
                                        Institucional
                                    </a>
                                </li>

                                <li class="col-span-1">
                                    <a class="main-nav-link <?php echo $wp->request == 'pe-jordan' ? 'is-active' : ''; ?> bg-[#329532]" href="<?php echo get_home_url(null, '/pe-jordan') ?>">
                                        Pe. Jordan
                                    </a>
                                </li>

                                <li class="col-span-1">
                                    <a class="main-nav-link <?php echo $wp->request == 'vocacional' ? 'is-active' : ''; ?> rounded-tr-[9999px] rounded-br-[9999px] bg-[#058E36]" href="<?php echo get_home_url(null, '/vocacional') ?>">
                                        Vocacional
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="h-16 relative">

                            <span class="w-[40px] h-full top-0 right-full absolute bg-[#83AB1E]"></span>

                            <ul class="h-full grid grid-cols-4">

                                <li class="col-span-1">
                                    <a class="main-nav-link <?php echo $wp->request == 'paroquias' ? 'is-active' : ''; ?> bg-[#83AB1E]" href="<?php echo get_home_url(null, '/paroquias') ?>">
                                        Paróquias
                                    </a>
                                </li>

                                <li class="col-span-1">
                                    <a class="main-nav-link <?php echo $wp->request == 'educacao' ? 'is-active' : ''; ?> bg-[#549D2C]" href="<?php echo get_home_url(null, '/educacao') ?>">
                                        Educação
                                    </a>
                                </li>

                                <li class="col-span-1">
                                    <a class="main-nav-link <?php echo $wp->request == 'obras-sociais' ? 'is-active' : ''; ?> bg-[#3A9731]" href="<?php echo get_home_url(null, '/obras-sociais') ?>">
                                        Obras Sociais
                                    </a>
                                </li>

                                <li class="col-span-1">
                                    <a class="main-nav-link <?php echo $wp->request == 'revistas' ? 'is-active' : ''; ?> rounded-tr-[9999px] rounded-br-[9999px] bg-[#058E36]" href="<?php echo get_home_url(null, '/revistas') ?>">
                                        Revista
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <?php if (isset(get_pages_editorials_settings()[$post->post_name]['menu'])) : ?>
                        <div class="w-full mt-16">
                            <nav>
                                <?php
                                $menu = get_pages_editorials_settings()[$post->post_name]['menu'];

                                if (isset($menu)) {
                                    wp_nav_menu(array(
                                        'container_class' => 'menu-secondary',
                                        'theme_location'  => $menu
                                    ));
                                }
                                ?>
                            </nav>
                        </div>
                    <?php endif; ?>
                </div>
            </header>

            <!-- general banner title -->
            <?php
            if (get_hidden_banner_title($post->post_type, $post->post_name)) {
                echo get_template_part('template-parts/content', 'general-banner-title');
            }
            ?>
            <!-- end general banner title -->
        </div>

        <div> <!-- #content -->