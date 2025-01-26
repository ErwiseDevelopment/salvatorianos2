<a href="<?php echo $args['link'] ?>">
    <div class="h-full border border-[#282929] flex flex-col justify-between pb-6">

        <div>
            <div class="w-full h-[220px] overflow-hidden">
                <?php
                if (!empty($args['thumbnail'])) :
                    echo $args['thumbnail'];
                ?>
                <?php else: ?>
                    <div class="w-full h-[220px] bg-gray-100"></div>
                <?php
                endif;
                ?>
            </div>

            <div class="pt-6 px-6">
                <?php if (isset($args['category_name'])): ?>
                    <p class="text-xs 2xl:text-sm font-bold font-red-hat-display uppercase text-[#56913E]">
                        <?php echo $args['category_name'] ?>
                    </p>
                <?php endif; ?>

                <p class="text-[10px] font-bold font-red-hat-display text-[#56913E] mb-2">
                    <?php echo $args['date_published'] ?>
                </p>

                <h3 class="text-lg 2xl:text-xl font-black font-red-hat-display text-[#2C285B] mb-4" style="line-height:100%">
                    <?php echo get_limit_words($args['title'], 8); ?>
                </h3>

                <?php if (isset($args['excerpt'])): ?>
                    <p class="text-xs 2xl:text-sm font-normal font-red-hat-display text-[#2E2E2E] mb-4">
                        <?php echo get_limit_words($args['excerpt'], 20) ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>

        <div class="px-6">
            <span class="w-32 transition hover:scale-90 block text-xs font-bold font-red-hat-display text-center uppercase text-white bg-gradient-to-r from-[#91AC31] to-[#4D8C3F] py-2 px-8">
                Ler mais
            </span>
        </div>
    </div>
</a>