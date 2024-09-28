<section class="pt-12">

    <div class="container">

        <div class="grid grid-cols-1 xl:grid-cols-2 gap-2">

            <!-- news main featured -->
            <div>
                <?php
                $news_featured_category = get_editorials()['portal']['categories']['news_featured'];

                $args = array(
                    'posts_per_page' => 1,
                    'post_type'      => 'post',
                    'category_name'  => $news_featured_category,
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
                                <span class="news-item-emphasis">
                                    Destaque
                                </span>

                                <h2 class="news-item-title">
                                    <?php the_title() ?>
                                </h2>

                                <p class="news-item-read-more text-sm text-[#8DAA32]">
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
                $args = array(
                    'posts_per_page' => 1,
                    'post_type'      => 'post',
                    'category_name'  => $news_featured_category,
                    'order'          => 'DESC',
                    'post__not_in'   => $news_hidden
                );

                $news_featured = new WP_Query($args);

                if ($news_featured->have_posts()) :
                    while ($news_featured->have_posts()) : $news_featured->the_post();
                        array_push($news_hidden, get_the_ID());
                ?>
                        <a class="news-item col-span-full row-span-1" href="<?php the_permalink() ?>">
                            <?php echo get_post_thumbnail_custom('news-item-thumbnail') ?>

                            <div class="bottom-0 left-0 absolute z-10 p-5">
                                <span class="news-item-emphasis text-xs" style="background-image: linear-gradient(to right, #8335fa, #2c2460)">
                                    Notícia
                                </span>

                                <h2 class="news-item-title text-xl">
                                    <?php the_title() ?>
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
                <!-- end news featured -->

                <?php
                $args = array(
                    'posts_per_page' => 2,
                    'post_type'      => 'post',
                    'category_name'  => $news_featured_category,
                    'order'          => 'DESC',
                    'post__not_in'   => $news_hidden
                );

                $news = new WP_Query($args);

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

                                <h2 class="news-item-title text-xl">
                                    <?php the_title() ?>
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
                $args = array(
                    'posts_per_page' => 3,
                    'post_type'      => 'post',
                    'category_name'  => $news_featured_category,
                    'order'          => 'DESC',
                    'post__not_in'   => $news_hidden,
                );

                $news = new WP_Query($args);

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
                        $args = array(
                            'post_type'      => 'post',
                            'posts_per_page' => 3,
                            'category_name'  => $news_featured_category,
                            'order'          => 'DESC',
                            'post__not_in'   => $news_hidden,
                        );

                        $news = new WP_Query($posts_args);

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
                    'editoria-educacao',
                    'editoria-institucional',
                    'editoria-vocacional'
                ];

                $posts_loop = 0;

                foreach ($editorials_categories as $editorial_category) :
                    $args = array(
                        'posts_per_page' => 1,
                        'post_type'      => 'post',
                        'category_name'  => $news_featured_category,
                        'order'          => 'DESC',
                        'post__not_in'   => $news_hidden,
                    );

                    $posts_editorials = new WP_Query($args);

                    if ($posts_editorials->have_posts()):
                        while ($posts_editorials->have_posts()): $posts_editorials->the_post();
                            $posts_loop++;
                ?>
                            <a class="block hover:underline mb-4 last:mb-0" href="<?php the_permalink() ?>">
                                <p class="text-2xl font-black font-red-hat-display <?php echo $posts_loop % 2 == 0 ? 'text-[#91AC31]' : 'text-[#8335fa]'; ?>">
                                    <?php
                                    $category = get_category_by_slug($editorial_category);

                                    echo $category->name;
                                    ?>
                                </p>

                                <p class="text-sm font-black font-red-hat-display text-[#2D2D2D] mb-2">
                                    <!-- Salvatorianos celebram 127 anos de ação missionária no Brasil -->
                                    <?php the_title() ?>
                                </p>

                                <p class="tracking-[2px] text-lg font-semibold font-red-hat-display uppercase text-[#8DAA32]">
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