<?php

/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Theme Dev
 * 
 * Template Name: Modelo Vídeo
 * Template Post Type: page
 */

get_header();
?>

<div id="primary" class="content-area">

    <main id="main" class="site-main">

        <?php while (have_posts()) : the_post(); ?>
            <section class="py-20 xl:py-44">

                <div class="container">

                    <!-- videos desktop -->
                    <div class="hidden xl:grid grid-cols-3 gap-14">
                        <!-- loop -->
                        <?php
                        if ($post->post_parent != 0) {
                            $editorial_category_slug = get_post($post->post_parent)->post_name;

                            $editorial_category = get_term_by('slug', $editorial_category_slug, 'editoria');

                            $args = array(
                                'posts_per_page' => -1,
                                'post_type'      => 'videos',
                                'order'          => 'DESC',
                                'tax_query'      => array(
                                    array(
                                        'taxonomy' => 'editoria',
                                        'field'    => 'term_id',
                                        'terms'    => $editorial_category->term_id
                                    )
                                )
                            );
                        } else {
                            $args = array(
                                'posts_per_page' => -1,
                                'post_type'      => 'videos',
                                'order'          => 'DESC'
                            );
                        }

                        $videos = new WP_Query($args);

                        if ($videos->have_posts()) :
                            while ($videos->have_posts()) : $videos->the_post();
                        ?>
                                <div class="col-span-1">

                                    <div class="w-full h-[280px] video">
                                        <!-- <iframe class="w-full h-full" src="https://www.youtube.com/embed/8sBuWPxXvpk?si=cBt_TtHMfyLga-Qx" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
                                        <?php echo get_field('link_video') ?>
                                    </div>
                                </div>
                        <?php
                            endwhile;
                        else :
                            echo get_no_posts_found('Vídeo');
                        endif;

                        wp_reset_query();
                        ?>
                        <!-- end loop -->
                    </div>
                    <!-- end videos desktop -->

                    <!-- videos mobile -->
                    <div class="xl:hidden">

                        <!-- swiper -->
                        <div class="swiper js-swiper-videos">

                            <div class="swiper-wrapper">

                                <!-- slide -->
                                <?php
                                $videos = new WP_Query($args);

                                if ($videos->have_posts()) :
                                    while ($videos->have_posts()) : $videos->the_post();
                                ?>
                                        <div class="swiper-slide">
                                            <div class="w-full h-[400px] xl:h-[280px] video">
                                                <?php echo get_field('link_video') ?>
                                            </div>
                                        </div>
                                <?php
                                    endwhile;
                                endif;

                                wp_reset_query();
                                ?>
                                <!-- end slide -->
                            </div>
                        </div>
                        <!-- end swiper -->
                    </div>
                    <!-- end videos mobile -->
                </div>
            </section>
        <?php endwhile; ?>
    </main>
</div>

<?php
get_footer();
