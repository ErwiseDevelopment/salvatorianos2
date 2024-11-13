<section class="pt-24">

    <!-- gallery desktop -->
    <div class="hidden xl:grid grid-cols-3">
        <?php
        $albums = new WP_Query($args);

        if ($albums->have_posts()):
            while ($albums->have_posts()): $albums->the_post();
        ?>
                <div class="col-span-1">
                    <a class="gallery-item" href="<?php the_permalink() ?>">
                        <img class="w-full h-[400px] 2xl:h-[500px] object-cover block" src="<?php echo get_field('capa_galeria') ?>" alt="<?php the_title() ?> - Salvatorianos" />

                        <div class="gallery-item-box">
                            <p class="gallery-item-title">
                                <?php the_title() ?>
                            </p>

                            <p class="gallery-item-read-more">
                                ver mais
                            </p>
                        </div>
                    </a>
                </div>
        <?php
            endwhile;
        endif;

        wp_reset_query();
        ?>
    </div>
    <!-- end gallery desktop -->

    <!-- gallery mobile -->
    <div class="xl:hidden">

        <!-- swiper -->
        <div class="swiper js-swiper-gallery">

            <div class="swiper-wrapper">

                <!-- slide -->
                <?php
                $albums = new WP_Query($args);

                if ($albums->have_posts()):
                    while ($albums->have_posts()): $albums->the_post();
                ?>
                        <div class="swiper-slide">
                            <img class="w-full h-[260px] lg:h-[400px] object-cover block" src="<?php echo get_field('capa_galeria') ?>" alt="<?php the_title() ?> - Salvatorianos" />
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
    <!-- end gallery mobile -->

    <div class="flex justify-center mt-12">
        <a class="button-cta" href="<?php echo get_home_url(null, 'albuns') ?>">
            Ver tudo
        </a>
    </div>
</section>