<section class="pt-20">

    <div class="container grid grid-cols-3 gap-6">

        <?php for ($i = 0; $i < 3; $i++) : ?>
            <a href="#">
                <img class="w-full object-cover" src="<?php echo get_template_directory_uri() ?>/resources/images/revista-missao-salvatoriana.png" alt="Revista Missão Salvatoriana - Salvatorianos" />

                <p class="font-bold font-red-hat-display text-center text-[#2C285B] mt-6">
                    Jan/Fev/Mar - 2024
                </p>

                <div class="flex justify-center">
                    <span class="transition hover:scale-90 rounded-full inline-block text-xl font-bold font-red-hat-display text-center uppercase text-white bg-gradient-to-r from-[#91AC31] to-[#4D8C3F] mt-6 py-3 px-8">
                        Acesse agora
                    </span>
                </div>
            </a>
        <?php endfor; ?>

        <div class="col-span-full flex justify-center mt-10">
            <a class="transition hover:scale-90 rounded-full inline-block text-xl font-bold font-red-hat-display text-center uppercase text-white bg-gradient-to-r from-[#7C33EE] to-[#2D2463] py-2 px-8" href="#">
                Edições anteriores
            </a>
        </div>
    </div>
</section>