<section class="overflow-hidden bg-[#28235C] mt-20">

    <div class="container flex">

        <div class="w-7/12">
            <img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri() ?>/resources/images/newsletter.png" alt="Newsletter - Salvatoriano" />
        </div>

        <div class="w-5/12 flex flex-col justify-end pb-12 pl-12">

            <h6 class="text-4xl font-black font-red-hat-display text-white mb-4">
                Inscreva-se e receba <br />
                mensalmente
            </h6>

            <form>

                <div class="grid">

                    <div class="mb-4">
                        <input class="input-field" type="text" name="nome" placeholder="Nome" />
                    </div>

                    <div class="mb-5">
                        <input class="input-field" type="email" name="email" placeholder="E-mail" />
                    </div>

                    <div>
                        <input class="btn-submit" type="submit" value="Quero receber!" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>