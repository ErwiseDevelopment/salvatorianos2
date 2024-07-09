<section class="bg-gradient-to-r from-[#91AC31] to-[#4D8C3F] mt-24 py-10">

    <div class="container">

        <div class="relative flex justify-between">

            <div class="w-full h-[2px] bottom-2 left-0 absolute bg-[#E0E0E0]"></div>

            <div class="relative pb-2">
                <h4 class="text-4xl font-black font-red-hat-display text-white">
                    Materiais exclusivos <br />
                    e gratuitos
                </h4>

                <div class="w-48 h-2 translate-y-[2px] bg-[#92C900]"></div>
            </div>

            <div class="flex justify-end items-end">
                <a class="translate-y-2 transition hover:opacity-90 rounded-full relative inline-block text-xl font-bold font-red-hat-display text-center uppercase text-white bg-[#27225C] py-2 px-8" href="#">
                    Ver tudo
                </a>
            </div>
        </div>

        <div class="grid grid-cols-4 gap-16 mt-6">

            <!-- loop -->
            <?php for ($i = 0; $i < 4; $i++) : ?>
                <a class="col-span-1 flex flex-col items-center" href="#" target="_blank" rel="noreferrer noopener">

                    <div class="w-[240px] h-[240px] rounded-full overflow-hidden flex justify-center items-center bg-white mb-2">
                        <img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri() ?>/resources/images/material-1.png" alt="Material gratuito - Salvatoriano" />
                    </div>

                    <h6 class="text-xl font-black font-red-hat-display text-center text-white mb-2" style="line-height:110%">
                        Planilha para definir seu propósito de vida
                    </h6>

                    <span class="tracking-[2px] inline-block text-sm font-medium font-red-hat-display text-center uppercase hover:underline text-[#2C285B]">
                        Baixar
                    </span>
                </a>
            <?php endfor; ?>
            <!-- end loop -->
        </div>
    </div>
</section>