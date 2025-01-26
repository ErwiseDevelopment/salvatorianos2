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

<body <?php body_class(); ?> x-data="{ openMenu: false }" x-bind:class="openMenu ? 'overflow-hidden' : ''">

    <div id="page" class="site">
        <!-- top social media -->
        <?php echo get_template_part('template-parts/content', 'top-social-media') ?>
        <!-- end top social media -->

        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', ''); ?></a>

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

                <div class="container flex flex-wrap px-2 xl:px-4">

                    <div class="w-3/12 relative hidden lg:block">

                        <a class="lg:w-[300px] xl:w-[280px] 2xl:w-[380px] lg:h-[300px] xl:h-[280px] 2xl:h-[380px] -translate-y-32 2xl:-translate-y-56 translate-x-12 xl:translate-x-28 2xl:translate-x-16 rounded-full absolute flex justify-center items-end bg-[#E9E5DD] pb-16 z-10" href="<?php echo get_home_url(null, '/') ?>">
                            <img class="w-56" src="<?php echo get_template_directory_uri() ?>/resources/images/logo-salvatorianos.png" alt="Salvatorianos" />
                        </a>
                    </div>

                    <div class="w-full lg:w-9/12 flex flex-col py-4">

                        <div class="h-16 mb-4">

                            <ul class="h-full grid grid-cols-4">

                                <?php
                                if ($post->post_parent != 0) {
                                    $request_uri = get_post($post->post_parent)->post_name;
                                } else {
                                    $request_uri = $wp->request;
                                }
                                ?>

                                <li class="col-span-1 flex justify-end">
                                    <a class="w-full lg:w-[90px] xl:w-[80px] h-full transition hover:opacity-90 rounded-tl-[9999px] rounded-bl-[9999px] flex justify-center items-center <?php echo $wp->request == '' ? 'bg-[#27225C]' : 'bg-[#8134F4]'; ?> py-6 xl:py-4 px-8 xl:px-6" href="<?php echo get_home_url(null, '/') ?>">
                                        <img class="w-full h-full" src="<?php echo get_template_directory_uri() ?>/resources/images/icon-home.png" alt="Home - Salvatoriano" />
                                    </a>
                                </li>

                                <li class="col-span-1">
                                    <a class="main-nav-link <?php echo $request_uri == 'institucional' ? 'is-active' : ''; ?> bg-[#549D2C]" href="<?php echo get_home_url(null, '/institucional') ?>">
                                        Institucional
                                    </a>
                                </li>

                                <li class="col-span-1">
                                    <a class="main-nav-link <?php echo $request_uri == 'pe-jordan' ? 'is-active' : ''; ?> bg-[#329532]" href="<?php echo get_home_url(null, '/pe-jordan') ?>">
                                        Pe. Jordan
                                    </a>
                                </li>

                                <li class="col-span-1">
                                    <a class="main-nav-link <?php echo $request_uri == 'vocacional' ? 'is-active' : ''; ?> rounded-tr-[9999px] rounded-br-[9999px] bg-[#058E36]" href="<?php echo get_home_url(null, '/vocacional') ?>">
                                        Vocacional
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="h-16 relative">

                            <span class="w-[60px] h-full top-0 xl:right-full absolute hidden lg:block <?php echo $request_uri == 'paroquias' ? 'bg-[#26245C]' : 'bg-[#83AB1E]'; ?>"></span>

                            <ul class="h-full grid grid-cols-4">

                                <li class="col-span-1">
                                    <a class="main-nav-link <?php echo $request_uri == 'paroquias' ? 'is-active' : ''; ?> rounded-tl-full rounded-bl-full xl:rounded-none bg-[#83AB1E]" href="<?php echo get_home_url(null, '/paroquias') ?>">
                                        Paróquias
                                    </a>
                                </li>

                                <li class="col-span-1">
                                    <a class="main-nav-link <?php echo $request_uri == 'educacao' ? 'is-active' : ''; ?> bg-[#549D2C]" href="<?php echo get_home_url(null, '/educacao') ?>">
                                        Educação
                                    </a>
                                </li>

                                <li class="col-span-1">
                                    <a class="main-nav-link <?php echo $request_uri == 'obras-sociais' ? 'is-active' : ''; ?> bg-[#3A9731]" href="<?php echo get_home_url(null, '/obras-sociais') ?>">
                                        Obras Sociais
                                    </a>
                                </li>

                                <li class="col-span-1">
                                    <a class="main-nav-link <?php echo $request_uri == 'revistas' ? 'is-active' : ''; ?> rounded-tr-[9999px] rounded-br-[9999px] bg-[#058E36]" href="<?php echo get_home_url(null, '/revistas') ?>">
                                        Revista
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <?php
                    if ($post->post_parent != 0) {
                        $page_parent_name = get_post($post->post_parent)->post_name;

                        if (isset(get_pages_editorials_settings()[$page_parent_name]['menu'])) {
                            echo get_template_part('template-parts/content', 'menu-secondary', get_menu_secondary_setting($page_parent_name));
                        }
                    } else {
                        if (isset(get_pages_editorials_settings()[$post->post_name]['menu'])) {
                            echo get_template_part('template-parts/content', 'menu-secondary', get_menu_secondary_setting($post->post_name));
                        }
                    }
                    ?>
                </div>
            </header>

            <!-- general banner title -->
            <?php
            if (get_hidden_banner_title($post->post_type, $post->post_name)) {
                echo get_template_part('template-parts/content', 'general-banner-title', get_general_banner_title_setting($post));
            }
            ?>
            <!-- end general banner title -->
        </div>

        <div> <!-- #content -->