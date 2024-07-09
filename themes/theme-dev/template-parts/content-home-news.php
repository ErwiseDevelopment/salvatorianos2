<section class="pt-12">

    <div class="container">

        <div class="grid grid-cols-2 gap-2">

            <div>
                <a class="news-item" href="#">
                    <img class="news-item-thumbnail" src="<?php echo get_template_directory_uri() ?>/resources/images/home-news-1.png" alt="News - Salvatorianos" />

                    <div class="bottom-0 left-0 absolute z-10 p-8">
                        <span class="news-item-emphasis text-base">
                            Destaque
                        </span>

                        <h2 class="news-item-title text-2xl">
                            O Papa: como Jesus, aproximar-se de quem sofre com compaixão e inclusão
                        </h2>

                        <p class="news-item-read-more text-sm text-[#8DAA32]">
                            Leia mais >
                        </p>
                    </div>
                </a>
            </div>

            <div class="h-[560px] grid grid-cols-2 grid-rows-2 gap-2">

                <a class="news-item col-span-full row-span-1" href="#">
                    <img class="news-item-thumbnail" src="<?php echo get_template_directory_uri() ?>/resources/images/home-news-1.png" alt="News - Salvatorianos" />

                    <div class="bottom-0 left-0 absolute z-10 p-5">
                        <span class="news-item-emphasis text-xs">
                            Destaque
                        </span>

                        <h2 class="news-item-title text-xl">
                            O Papa: como Jesus, aproximar-se de quem sofre com compaixão e inclusão
                        </h2>

                        <p class="news-item-read-more text-[8px] text-white">
                            Leia mais >
                        </p>
                    </div>
                </a>

                <a class="news-item col-span-1 row-span-1" href="#">
                    <img class="news-item-thumbnail" src="<?php echo get_template_directory_uri() ?>/resources/images/home-news-1.png" alt="News - Salvatorianos" />

                    <div class="bottom-0 left-0 absolute z-10 p-5">
                        <span class="news-item-emphasis text-[6px]">
                            Destaque
                        </span>

                        <h2 class="news-item-title text-sm">
                            O Papa: como Jesus, aproximar-se de quem sofre com compaixão e inclusão
                        </h2>

                        <p class="news-item-read-more text-[6px] text-white">
                            Leia mais >
                        </p>
                    </div>
                </a>

                <a class="news-item col-span-1 row-span-1" href="#">
                    <img class="news-item-thumbnail" src="<?php echo get_template_directory_uri() ?>/resources/images/home-news-1.png" alt="News - Salvatorianos" />

                    <div class="bottom-0 left-0 absolute z-10 p-5">
                        <span class="news-item-emphasis text-[6px]">
                            Destaque
                        </span>

                        <h2 class="news-item-title text-sm">
                            O Papa: como Jesus, aproximar-se de quem sofre com compaixão e inclusão
                        </h2>

                        <p class="news-item-read-more text-[6px] text-white">
                            Leia mais >
                        </p>
                    </div>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-4 gap-4">

            <div class="col-span-3 grid grid-cols-3 gap-4 mt-8">

                <!-- loop -->
                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <?php echo get_template_part('components/new-item') ?>
                <?php endfor; ?>
                <!-- end loop -->
            </div>

            <div class="col-span-1 pt-6">

                <!-- loop -->
                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <a class="block hover:underline mb-4 last:mb-0" href="#">
                        <p class="text-2xl font-black font-red-hat-display text-[#91AC31]">
                            Institucional
                        </p>

                        <p class="text-sm font-black font-red-hat-display text-[#2D2D2D] mb-2">
                            Salvatorianos celebram 127 anos de ação missionária no Brasil
                        </p>

                        <p class="tracking-[2px] text-lg font-semibold font-red-hat-display uppercase text-[#8DAA32]">
                            Confira >
                        </p>
                    </a>
                <?php endfor; ?>
                <!-- end loop -->
            </div>
        </div>

        <div class="flex justify-center mt-12">
            <a class="button-cta" href="#">
                Todas as notícias
            </a>
        </div>
    </div>
</section>