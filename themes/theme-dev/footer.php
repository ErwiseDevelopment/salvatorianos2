<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Theme Dev
 */

?>

</div><!-- #content -->

</div><!-- #page -->

<!-- newsletter -->
<?php echo get_template_part('template-parts/content', 'newsletter') ?>
<!-- newsletter -->

<!-- footer -->
<footer class="bg-gradient-green-200 pt-20 pb-12">

    <div class="container flex flex-wrap justify-center">

        <div class="w-full xl:w-5/12">

            <p class="text-xl 2xl:text-[28px] font-bold font-red-hat-display text-white">
                Avenida Lino de Almeida Pires, 130 <br />
                Vila Guarani, São Paulo/SP

                <br />
                <br />

                (11) 5588-2000
            </p>
        </div>

        <div class="w-full xl:w-4/12 grid grid-cols-1 xl:grid-cols-2 pt-10 xl:pt-0">

            <ul>
                <li class="mb-1">
                    <a class="text-xl 2xl:text-[26px] font-medium font-red-hat-display hover:underline text-white" href="<?php echo get_home_url(null, '/institucional') ?>">
                        Institucional
                    </a>
                </li>

                <li class="mb-1">
                    <a class="text-xl 2xl:text-[26px] font-medium font-red-hat-display hover:underline text-white" href="<?php echo get_home_url(null, '/paroquias') ?>">
                        Paróquias
                    </a>
                </li>

                <li class="mb-1">
                    <a class="text-xl 2xl:text-[26px] font-medium font-red-hat-display hover:underline text-white" href="<?php echo get_home_url(null, '/obras-sociais') ?>">
                        Obras Sociais
                    </a>
                </li>

                <li>
                    <a class="text-xl 2xl:text-[26px] font-medium font-red-hat-display hover:underline text-white" href="<?php echo get_home_url(null, '/revistas') ?>">
                        Revista
                    </a>
                </li>
            </ul>

            <ul>
                <li class="mb-1">
                    <a class="text-xl 2xl:text-[26px] font-medium font-red-hat-display hover:underline text-white" href="<?php echo get_home_url(null, '/vocacional') ?>">
                        Vocacional
                    </a>
                </li>

                <li class="mb-1">
                    <a class="text-xl 2xl:text-[26px] font-medium font-red-hat-display hover:underline text-white" href="<?php echo get_home_url(null, '/educacao') ?>">
                        Educação
                    </a>
                </li>

                <li class="mb-1">
                    <a class="text-xl 2xl:text-[26px] font-medium font-red-hat-display hover:underline text-white" href="<?php echo get_home_url(null, '/pe-jordan') ?>">
                        Pe. Jordan
                    </a>
                </li>

                <li class="flex gap-x-2 pt-3">
                    <a class="w-5 2xl:w-7 h-5 2xl:h-7" href="<?php echo get_field('instagram', 'option') ?>" target="_blank" rel="noreferrer noopener">
                        <img class="w-5 2xl:w-7 h-5 2xl:h-7 object-cover" src="<?php echo get_template_directory_uri() ?>/resources/images/icon-instagram.png" alt="Instagram - Salvatoriano" />
                    </a>

                    <a class="w-5 2xl:w-7 h-5 2xl:h-7" href="<?php echo get_field('facebook', 'option') ?>" target="_blank" rel="noreferrer noopener">
                        <img class="w-5 2xl:w-7 h-5 2xl:h-7 object-cover" src="<?php echo get_template_directory_uri() ?>/resources/images/icon-facebook.png" alt="Facebook - Salvatoriano" />
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-full flex justify-center mt-12">
            <a href="<?php echo get_home_url(null, '/') ?>">
                <img src="<?php echo get_template_directory_uri() ?>/resources/images/salvatorianos-brasileira.png" alt="Salvatorianos Brasileira" />
            </a>
        </div>
    </div>
</footer>
<!-- end footer -->

<section class="bg-gradient-green-200 pb-8">
    <div class="container flex justify-center">

        <div class="w-11/12 grid grid-cols-1 xl:grid-cols-3 gap-4">

            <div class="order-3 xl:order-1 flex justify-center items-center">
                <p class="font-bold font-red-hat-display text-center text-white">
                    © Salvatorianos <?php echo date('Y'); ?> | Todos os direitos reservados
                </p>
            </div>

            <div class="order-1 xl:order-2 flex justify-center items-center">
                <a href="https://erwise.com.br/" target="_blank" rel="noreferrer noopener">
                    <img class="w-56" src="<?php echo get_template_directory_uri() ?>/resources/images/erwise.png" alt="Erwise Desenvolvimento - Salvatorianos" />
                </a>
            </div>

            <div class="order-2 xl:order-3 flex justify-center items-center">
                <a href="https://dominuscomunicacao.com/" target="_blank" rel="noreferrer noopener">
                    <img class="w-56" src="<?php echo get_template_directory_uri() ?>/resources/images/dominus.png" alt="Dominus - Salvatorianos" />
                </a>
            </div>
        </div>
    </div>
</section>

<?php wp_footer(); ?>

</body>

</html>