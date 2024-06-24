<section>

    <div class="container flex">

        <div class="w-5/12 pr-20">
            <div class="relative">

                <div class="w-full h-[2px] bottom-2 left-0 absolute bg-[#E0E0E0]"></div>

                <div class="relative pb-2">
                    <h4 class="text-4xl font-black font-red-hat-display text-[#7137F0]">
                        Revistas Missão <br />
                        Salvatoriana
                    </h4>

                    <div class="w-48 h-2 translate-y-[2px] bg-[#92C900]"></div>
                </div>
            </div>

            <div class="flex flex-col items-center mt-8">
                <img class="h-[420px] object-cover" src="<?php echo get_template_directory_uri() ?>/resources/images/magazine-1.png" alt="Missão Salvatoriana - Salvatoriano" />

                <p class="text-sm font-bold font-red-hat-display text-center text-[#2C285B] mt-8 mb-4">
                    Jan/Fev/Mar - 2024
                </p>

                <div class="flex flex-col items-center gap-y-4">
                    <a class="transition hover:scale-90 rounded-full inline-block text-xl font-bold font-red-hat-display text-center uppercase text-white bg-gradient-to-r from-[#91AC31] to-[#4D8C3F] py-2 px-8" href="#">
                        Acesse agora
                    </a>

                    <a class="transition hover:scale-90 rounded-full inline-block text-xl font-bold font-red-hat-display text-center uppercase text-white bg-gradient-to-r from-[#7C33EE] to-[#2D2463] py-2 px-8" href="#">
                        Edições anteriores
                    </a>
                </div>
            </div>
        </div>

        <div class="w-7/12">

            <div class="relative flex justify-between">

                <div class="w-full h-[2px] bottom-2 left-0 absolute bg-[#E0E0E0]"></div>

                <div class="relative pb-2">
                    <h4 class="text-4xl font-black font-red-hat-display text-[#7137F0]">
                        Mais conteúdos <br />
                        em nosso blog
                    </h4>

                    <div class="w-48 h-2 translate-y-[2px] bg-[#92C900]"></div>
                </div>

                <div class="flex justify-end items-end">
                    <a class="translate-y-2 transition hover:opacity-90 rounded-full relative inline-block text-xl font-bold font-red-hat-display text-center uppercase text-white bg-[#27225C] py-2 px-8" href="#">
                        Ver tudo
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-y-8 gap-x-4 mt-8">

                <!-- loop -->
                <?php for ($i = 0; $i < 4; $i++) : ?>
                    <a class="col-span-1 block" href="#">
                        <img class="w-full h-[280px] block" src="<?php echo get_template_directory_uri() ?>/resources/images/blog-image-1.png" alt="Salvatoriano" />

                        <h5 class="text-2xl font-black font-red-hat-display text-[#2C285B] my-6">
                            5 livros para descobrir o
                            sentido da vida
                        </h5>

                        <p class="transition hover:scale-90 inline-block text-xs font-bold font-red-hat-display text-center uppercase text-white bg-gradient-to-r from-[#91AC31] to-[#4D8C3F] py-2 px-8">
                            Ler mais
                        </p>
                    </a>
                <?php endfor; ?>
                <!-- end loop -->
            </div>
        </div>
    </div>
</section>