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

		<div class="container grid grid-cols-2 gap-16 px-32">

			<?php for($i = 0; $i < 4; $i++) : ?>
				<a 
				class="flex flex-col items-center" 
				href="#"
				x-data="{ hoverImage: false }"
				x-on:mouseover="hoverImage = true"
				x-on:mouseout="hoverImage = false">
					<div class="w-[270px] h-[270px] rounded-full shadow-2xl overflow-hidden">
						<img 
						class="w-full h-full transition duration-200 object-cover" 
						x-bind:class="hoverImage == true ? 'scale-[1.1]' : 'scale-[1.0]'"
						src="<?php echo get_template_directory_uri() ?>/resources/images/material-01.png" 
						alt="Material Gratuito - Salvatorianos" />
					</div>					

					<h6 class="text-3xl font-black font-red-hat-display text-center text-[#4E8C3F] mt-4">
						Planilha para definir seu propósito de vida
					</h6>

					<p class="text-2xl font-medium font-red-hat-display text-center tracking-[6px] uppercase text-[#2C285B] mt-4">
						Baixar
					</p>
				</a>
			<?php endfor; ?>
		</div>
	</section>
<?php endwhile; ?>

</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
