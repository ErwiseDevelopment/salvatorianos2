<section class="pt-24">

    <!-- gallery desktop -->
    <div class="hidden xl:grid grid-cols-3">
        <?php
        $albums = new WP_Query($args);

        if ($albums->have_posts()):
            while ($albums->have_posts()): $albums->the_post();
        ?>
                <div class="col-span-1">
                    <img class="w-full h-[400px] block" src="<?php echo get_field('capa_galeria') ?>" alt="<?php the_title() ?> - Salvatorianos" />
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
                            <img class="w-full h-[260px] object-cover block" src="<?php echo get_field('capa_galeria') ?>" alt="<?php the_title() ?> - Salvatorianos" />
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
        <a class="button-cta" href="<?php echo get_home_url(null, 'galeria') ?>">
            Ver tudo
        </a>
    </div>
</section>