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

        <div class="w-5/12">

            <p class="text-xl font-bold font-red-hat-display text-white">
                Avenida Lino de Almeida Pires, 130 <br />
                Vila Guarani, São Paulo/SP

                <br />
                <br />

                (11) 5588-2000
            </p>
        </div>

        <div class="w-4/12 grid grid-cols-2">

            <ul>
                <li class="mb-1">
                    <a class="text-xl font-medium font-red-hat-display hover:underline text-white" href="#">
                        Institucional
                    </a>
                </li>

                <li class="mb-1">
                    <a class="text-xl font-medium font-red-hat-display hover:underline text-white" href="#">
                        Paróquias
                    </a>
                </li>

                <li class="mb-1">
                    <a class="text-xl font-medium font-red-hat-display hover:underline text-white" href="#">
                        Obras Sociais
                    </a>
                </li>

                <li>
                    <a class="text-xl font-medium font-red-hat-display hover:underline text-white" href="#">
                        Revista
                    </a>
                </li>
            </ul>

            <ul>
                <li class="mb-1">
                    <a class="text-xl font-medium font-red-hat-display hover:underline text-white" href="#">
                        Vocacional
                    </a>
                </li>

                <li class="mb-1">
                    <a class="text-xl font-medium font-red-hat-display hover:underline text-white" href="#">
                        Educação
                    </a>
                </li>

                <li class="mb-1">
                    <a class="text-xl font-medium font-red-hat-display hover:underline text-white" href="#">
                        Pe. Jordan
                    </a>
                </li>

                <li class="flex gap-x-2 pt-3">
                    <a class="w-4 h-4" href="#" target="_blank" rel="noreferrer noopener">
                        <img class="w-4 h-4 object-cover" src="<?php echo get_template_directory_uri() ?>/resources/images/icon-instagram.png" alt="Instagram - Salvatoriano" />
                    </a>

                    <a class="w-4 h-4" href="#" target="_blank" rel="noreferrer noopener">
                        <img class="w-4 h-4 object-cover" src="<?php echo get_template_directory_uri() ?>/resources/images/icon-facebook.png" alt="Facebook - Salvatoriano" />
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-full flex justify-center mt-12">
            <a href="#">
                <img src="<?php echo get_template_directory_uri() ?>/resources/images/salvatorianos-brasileira.png" alt="Salvatorianos Brasileira" />
            </a>
        </div>
    </div>
</footer>
<!-- end footer -->

<?php wp_footer(); ?>

</body>

</html>