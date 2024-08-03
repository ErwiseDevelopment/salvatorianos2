<a href="<?php echo $args['link'] ?>">
    <div class="h-full border border-[#282929] flex flex-col justify-between pb-6">

        <div>
            <div class="w-full h-[220px] overflow-hidden">
                <!-- <img class="w-full h-full object-cover" src="<php echo get_template_directory_uri() ?>/resources/images/vocacional-news-1.png" alt="Salvatorianos" /> -->
                <?php echo $args['thumbnail']; ?>
            </div>

            <div class="pt-6 px-6">
                <p class="text-xs font-bold font-red-hat-display uppercase text-[#56913E]">
                    <?php echo $args['category'] ?>
                </p>

                <p class="text-[10px] font-bold font-red-hat-display text-[#56913E] mb-2">
                    <!-- 11 de abril de 2024 -->
                    <?php echo $args['date_published'] ?>
                </p>

                <h3 class="text-lg font-black font-red-hat-display text-[#2C285B] mb-4" style="line-height:100%">
                    <?php echo $args['title'] ?>
                </h3>

                <p class="text-xs font-normal font-red-hat-display text-[#2E2E2E] mb-4">
                    <?php echo $args['excerpt'] ?>
                </p>
            </div>
        </div>

        <div class="px-6">
            <span class="w-32 transition hover:scale-90 block text-xs font-bold font-red-hat-display text-center uppercase text-white bg-gradient-to-r from-[#91AC31] to-[#4D8C3F] py-2 px-8">
                Ler mais
            </span>
        </div>
    </div>
</a>