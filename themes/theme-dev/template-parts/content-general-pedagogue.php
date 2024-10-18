<section class="pt-10 xl:py-32">

    <div class="container flex flex-wrap justify-center xl:px-0">

        <div class="w-5/12 translate-x-10 relative hidden xl:flex justify-end items-end z-10">
            <div class="w-full h-[560px]">
                <img class="w-full h-full translate-x-16 scale-[1.2] object-contain" src="<?php echo $args['image']; ?>" alt="Institucional - Salvatorianos" />
            </div>
        </div>

        <div class="w-full xl:w-7/12 xl:-translate-x-10 flex items-end">
            <div class="xl:rounded-tl-[250px] xl:rounded-tr-[250px] xl:rounded-br-[250px] bg-gradient-purple py-16 xl:py-24 px-8 xl:px-32">
                <h4 class="text-xl xl:text-3xl font-bold font-red-hat-display text-[#AFDF0F]" style="line-height:140%">
                    <?php echo $args['title']; ?>
                </h4>

                <p class="text-lg xl:text-2xl font-medium font-red-hat-display text-white" style="line-height:140%">
                    <?php echo $args['description']; ?>
                </p>
            </div>
        </div>

        <div class="w-full xl:w-8/12 -translate-y-4 xl:-translate-y-10 relative flex justify-center z-20">
            <p class="inline-block text-xl xl:text-3xl font-bold font-red-hat-display text-center uppercase text-white bg-gradient-green p-4">
                <?php echo $args['button_title']; ?>
            </p>
        </div>
    </div>
</section>