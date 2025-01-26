<section class="pt-12">

    <div class="container">

        <div class="grid grid-cols-1 xl:grid-cols-2 gap-2">

            <!-- news main featured -->
            <div>
                <?php
                $news_category_featured_slug = get_categories_setting()['categories']['featured']['slug'];

                $args = array(
                    'posts_per_page' => 1,
                    'post_type'      => 'post',
                    'category_name'  => $news_category_featured_slug,
                    'order'          => 'DESC'
                );

                $news_main_featured = new WP_Query($args);

                $news_hidden = [];

                if ($news_main_featured->have_posts()) :
                    while ($news_main_featured->have_posts()) : $news_main_featured->the_post();
                        array_push($news_hidden, get_the_ID());
                ?>
                        <a class="news-item" href="<?php the_permalink() ?>">
                            <?php echo get_post_thumbnail_custom('news-item-thumbnail') ?>

                            <div class="bottom-0 left-0 absolute z-10 p-8">
                                <span class="news-item-emphasis 2xl:text-xl">
                                    Destaque
                                </span>

                                <h2 class="news-item-title 2xl:text-4xl">
                                    <?php echo get_limit_words(get_the_title(), 8); ?>
                                </h2>

                                <p class="news-item-read-more text-sm 2xl:text-base text-[#8DAA32]">
                                    Leia mais >
                                </p>
                            </div>
                        </a>
                <?php
                    endwhile;
                endif;

                wp_reset_query();
                ?>
            </div>
            <!-- end news main featured -->

            <div class="xl:h-[560px] grid grid-cols-1 xl:grid-cols-2 xl:grid-rows-2 gap-2">

                <!-- news featured -->
                <?php
                $news_featured_args = array(
                    'posts_per_page' => 1,
                    'post_type'      => 'post',
                    'category_name'  => $news_category_featured_slug,
                    'order'          => 'DESC',
                    'post__not_in'   => $news_hidden
                );

                $news_featured = new WP_Query($news_featured_args);

                if ($news_featured->have_posts()) :
                    while ($news_featured->have_posts()) : $news_featured->the_post();
                        array_push($news_hidden, get_the_ID());
                ?>
                        <a class="news-item col-span-full row-span-1" href="<?php the_permalink() ?>">
                            <?php echo get_post_thumbnail_custom('news-item-thumbnail') ?>

                            <div class="bottom-0 left-0 absolute z-10 p-5">
                                <span class="news-item-emphasis text-xs 2xl:text-sm" style="background-image: linear-gradient(to right, #8335fa, #2c2460)">
                                    Notícia
                                </span>

                                <h2 class="news-item-title text-xl 2xl:text-[26px]">
                                    <?php echo get_limit_words(get_the_title(), 8); ?>
                                </h2>

                                <p class="news-item-read-more text-[8px] 2xl:text-xs text-white">
                                    Leia mais >
                                </p>
                            </div>
                        </a>
                <?php
                    endwhile;
                endif;

                wp_reset_query();
                ?>
                <!-- end news featured -->

                <?php
                $news_args = array(
                    'posts_per_page' => 2,
                    'post_type'      => 'post',
                    'category_name'  => $news_category_featured_slug,
                    'order'          => 'DESC',
                    'post__not_in'   => $news_hidden
                );

                $news = new WP_Query($news_args);

                if ($news->have_posts()):
                    while ($news->have_posts()): $news->the_post();
                        array_push($news_hidden, get_the_ID());

                        $terms = get_the_terms(get_the_ID(), 'category');

                        $news_category = null;

                        foreach ($terms as $term) {
                            if (isset(get_editorials()[$term->slug])) {

                                $news_category = get_editorials()[$term->slug];

                                break;
                            }
                        }
                ?>
                        <a class="news-item col-span-1 row-span-1" href="<?php the_permalink() ?>">
                            <?php echo get_post_thumbnail_custom('news-item-thumbnail') ?>

                            <div class="bottom-0 left-0 absolute z-10 p-5">
                                <span class="news-item-emphasis text-xs" style="background-image: linear-gradient(to right, <?php echo $news_category['colors']['primary']; ?>, <?php echo $news_category['colors']['secondary']; ?>)">
                                    <?php echo $news_category['title']; ?>
                                </span>

                                <h2 class="news-item-title text-base 2xl:text-[17px]">
                                    <?php echo get_limit_words(get_the_title(), 8); ?>
                                </h2>

                                <p class="news-item-read-more text-[8px] text-white">
                                    Leia mais >
                                </p>
                            </div>
                        </a>
                <?php
                    endwhile;
                endif;

                wp_reset_query();
                ?>
            </div>
        </div>

        <div class="grid grid-cols-4 gap-4">

            <!-- news desktop -->
            <div class="col-span-3 hidden xl:grid grid-cols-3 gap-4 mt-8">

                <!-- loop -->
                <?php
                $news_args = array(
                    'posts_per_page' => 3,
                    'post_type'      => 'post',
                    'category_name'  => $news_category_featured_slug,
                    'order'          => 'DESC',
                    'post__not_in'   => $news_hidden,
                );

                $news = new WP_Query($news_args);

                if ($news->have_posts()) :
                    while ($news->have_posts()) : $news->the_post();
                        echo get_template_part('template-parts/components/content', 'new-item', get_new_item_setting());
                    endwhile;
                endif;

                wp_reset_query();
                ?>
                <!-- end loop -->
            </div>
            <!-- news desktop end -->

            <!-- news mobile -->
            <div class="col-span-full xl:hidden mt-8">

                <!-- swiper -->
                <div class="swiper js-swiper-news">

                    <div class="swiper-wrapper">

                        <!-- slide -->
                        <?php
                        $news_args = array(
                            'post_type'      => 'post',
                            'posts_per_page' => 3,
                            'category_name'  => $news_category_featured_slug,
                            'order'          => 'DESC',
                            'post__not_in'   => $news_hidden,
                        );

                        $news = new WP_Query($news_args);

                        if ($news->have_posts()) :
                            while ($news->have_posts()) : $news->the_post();
                        ?>
                                <div class="swiper-slide">
                                    <?php echo get_template_part('template-parts/components/content', 'new-item', get_new_item_setting()); ?>
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
            <!-- end news mobile -->

            <div class="col-span-full xl:col-span-1 pt-6">

                <!-- loop -->
                <?php
                $editorials_categories = [
                    'educacao',
                    'institucional',
                    'vocacional'
                ];

                $posts_loop = 0;

                foreach ($editorials_categories as $editorial_category) :
                    $posts_editorials_args = array(
                        'posts_per_page' => 1,
                        'post_type'      => 'post',
                        'category_name'  => $news_category_featured_slug,
                        'order'          => 'DESC',
                        'post__not_in'   => $news_hidden,
                    );

                    $posts_editorials = new WP_Query($posts_editorials_args);

                    if ($posts_editorials->have_posts()):
                        while ($posts_editorials->have_posts()): $posts_editorials->the_post();
                            $posts_loop++;
                ?>
                            <a class="block hover:underline mb-4 last:mb-0" href="<?php the_permalink() ?>">
                                <p class="text-2xl 2xl:text-[34px] font-black font-red-hat-display <?php echo $posts_loop % 2 == 0 ? 'text-[#91AC31]' : 'text-[#8335fa]'; ?>">
                                    <?php echo get_category_by_slug($editorial_category)->name; ?>
                                </p>

                                <p class="text-sm 2xl:text-[17px] font-black font-red-hat-display text-[#2D2D2D] mb-2">
                                    <!-- Salvatorianos celebram 127 anos de ação missionária no Brasil -->
                                    <?php echo get_limit_words(get_the_title(), 8); ?>
                                </p>

                                <p class="tracking-[2px] text-lg 2xl:text-xl font-semibold font-red-hat-display uppercase text-[#8DAA32]">
                                    Confira >
                                </p>
                            </a>
                <?php
                        endwhile;
                    endif;
                endforeach;

                wp_reset_query();
                ?>
                <!-- end loop -->
            </div>
        </div>

        <div class="flex justify-center mt-12">
            <a class="button-cta" href="<?php echo get_home_url(null, '/noticias') ?>">
                Todas as notícias
            </a>
        </div>
    </div>
</section>