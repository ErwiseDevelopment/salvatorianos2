<section class="pt-20">

    <div class="container grid grid-cols-4 gap-4">

        <div class="col-span-full relative mb-8">

            <div class="w-[424px] h-[2px] bottom-2 left-0 absolute bg-[#E0E0E0]"></div>

            <div class="relative pb-2">
                <h4 class="text-4xl font-black font-red-hat-display text-[#7137F0]">
                    <?php echo $args['title'] ?>
                </h4>

                <div class="w-48 h-2 translate-y-[2px] bg-[#92C900] mt-2"></div>
            </div>
        </div>

        <?php 
            $posts_args = array(
                'post_type'      => 'post',
                'posts_per_page' => 4,
                'category_name'  => $args['category_slug'],
                'order'          => 'DESC'
            );

            $posts_editorial = new WP_Query($posts_args);

            if($posts_editorial->have_posts()) :
                while($posts_editorial->have_posts()) : $posts_editorial->the_post();
                    echo get_template_part('template-parts/components/content', 'new-item', get_posts_attributes($posts_editorial));
                endwhile;
            endif;

            wp_reset_query();
        ?>

        <div class="col-span-full flex justify-center mt-12">
            <a class="button-cta" href="<?php echo $args['button_link'] ?>">
                <?php echo $args['button_title'] ?>
            </a>
        </div>
    </div>
</section>