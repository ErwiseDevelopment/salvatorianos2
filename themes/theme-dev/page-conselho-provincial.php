<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Theme Dev
 */

get_header();
?>

<div id="primary" class="content-area">
<main id="main" class="site-main">

<?php while ( have_posts() ) : the_post(); ?>

	<section class="py-24">

		<div class="container grid grid-cols-3 gap-y-16 gap-x-10">

			<?php for($i = 0; $i < 6; $i++) : ?>
				<div>
					<div class="w-full h-[340px]">
						<img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri() ?>/resources/images/conselho-01.png" alt="Conselho - Salvatorianos" />
					</div>

					<h6 class="text-3xl font-black font-red-hat-display text-center text-[#2C295C] mt-2">
						Pe. Francisco Sydney de Macêdo Gonçalves
					</h6>

					<div class="my-4 px-10">
						<div class="w-full h-[14px] bg-[#94C901]"></div>
					</div>

					<p class="text-xl font-medium font-red-hat-display text-center text-[#4D8D3F]">
						Diretor Provincial <br />
						e Diretor Presidente da ABEA <br />
						Nasc. 21/01/1969 - Fortaleza, CE.
					</p>
				</div>
			<?php endfor; ?>
		</div>
	</section>
<?php endwhile; ?>

</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
