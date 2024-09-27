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

		<?php while (have_posts()) : the_post(); ?>

			<!-- banner -->
			<?php
			$editorial_slug = get_editorials()['editoria-institucional']['categories']['slug'];

			echo get_template_part('template-parts/content', 'general-banner', get_general_custom_post('banners', $editorial_slug))
			?>
			<!-- end banner -->

			<!-- posts editorial -->
			<?php echo get_template_part('template-parts/content', 'general-posts-editorial', get_general_posts_editorial_attributes('Confira o que está acontecendo em nossa Província', 'institucional-noticia', 'Todas as notícias institucionais', 'https://google.com')) ?>
			<!-- end posts editorial -->

			<!-- our pedagogue -->
			<section class="py-32">

				<div class="container flex flex-wrap justify-center px-0">

					<div class="w-5/12 translate-x-10 relative flex justify-end items-end z-10">
						<div class="w-full h-[560px]">
							<img class="w-full h-full translate-x-16 scale-[1.2] object-contain" src="<?php echo get_template_directory_uri() ?>/resources/images/carisma.png" alt="Institucional - Salvatorianos" />
						</div>
					</div>

					<div class="w-7/12 -translate-x-10 flex items-end">
						<div class="rounded-tl-[250px] rounded-tr-[250px] rounded-br-[250px] bg-gradient-purple py-24 px-32">
							<h4 class="text-3xl font-bold font-red-hat-display text-[#AFDF0F]" style="line-height:140%">
								Os Salvatorianos são o resultado do
								amor e do sonho do Pe. Francisco
								Maria da Cruz Jordan.
							</h4>

							<p class="text-2xl font-medium font-red-hat-display text-white" style="line-height:140%">
								Somos uma congregação religiosa que busca
								que Jesus seja conhecido e amado como o
								Salvador do Mundo. Queremos envolver a
								todos neste sonho, nesta forma de vida.
								Estamos presentes em muitos países, mais de
								30, e queremos crescer ainda mais. Venha nos
								conhecer!
							</p>
						</div>
					</div>

					<div class="w-8/12 -translate-y-10 relative flex justify-center z-20">
						<p class="inline-block text-3xl font-bold font-red-hat-display text-center uppercase text-white bg-gradient-green p-4">
							conheça nosso carisma
						</p>
					</div>
				</div>
			</section>
			<!-- end our pedagogue -->

			<!-- blog -->
			<?php echo get_template_part('template-parts/content', 'general-blog') ?>
			<!-- blog -->

			<!-- jordan prayer -->
			<?php echo get_template_part('template-parts/content', 'general-jordan-prayer') ?>
			<!-- jordan prayer -->

			<div class="mt-10"></div>
		<?php endwhile; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
