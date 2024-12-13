<section class="overflow-hidden bg-[#28235C]">

    <div class="container flex flex-wrap justify-center">

        <div class="w-11/12 xl:w-6/12">
            <img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri() ?>/resources/images/newsletter.png" alt="Newsletter - Salvatoriano" />
        </div>

        <div class="w-full lg:w-9/12 xl:w-5/12 flex flex-col justify-end mt-6 xl:mt-0 pb-12 xl:pl-12">

            <h6 class="text-2xl xl:text-4xl font-black font-red-hat-display text-center xl:text-start text-white mb-4">
                Inscreva-se e receba <br />
                mensalmente
            </h6>

            <?php echo do_shortcode('[contact-form-7 id="9238e99" title="Newsletter"]') ?>

            <!-- <form>

                <div class="grid">

                    <div class="mb-4">
                        <input class="input-field" type="text" name="nome" placeholder="Nome" />
                    </div>

                    <div class="mb-5">
                        <input class="input-field" type="email" name="email" placeholder="E-mail" />
                    </div>

                    <div class="flex justify-center xl:justify-start">
                        <input class="btn-submit" type="submit" value="Quero receber!" />
                    </div>
                </div>
            </form> -->
        </div>
    </div>
</section>