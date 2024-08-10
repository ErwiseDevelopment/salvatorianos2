<section class="w-full h-[530px] flex justify-center items-end bg-cover bg-no-repeat pb-10" style="background-image: url(<?php echo get_template_directory_uri() ?>/resources/images/banner-title.png)">
    <h1 class="text-7xl font-black font-red-hat-display text-center text-white">
        <?php if($post->post_type == 'post') : ?>
            <span>
                Notícias
            </span>
        <?php else: ?>
            <?php the_title() ?>
        <?php endif;?>
    </h1>
</section>