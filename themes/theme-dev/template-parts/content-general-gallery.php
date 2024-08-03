<section class="pt-24">

    <div class="grid grid-cols-3">
        <?php for ($i = 0; $i < 6; $i++) : ?>
            <div class="col-span-1">
                <img class="w-full h-[400px] block" src="<?php echo get_template_directory_uri() ?>/resources/images/gallery-1.png" alt="">
            </div>
        <?php endfor; ?>
    </div>

    <div class="flex justify-center mt-12">
        <a class="button-cta" href="#">
            Ver tudo
        </a>
    </div>
</section>