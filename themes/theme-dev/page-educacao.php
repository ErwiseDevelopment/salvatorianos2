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
			<?php echo get_template_part('template-parts/content', 'general-banner', get_general_banner('educacao')) ?>
			<!-- end banner -->

			<!-- posts editorial -->
			<?php echo get_template_part('template-parts/content', 'general-posts-editorial', get_general_posts_editorial_attributes('Saiba tudo sobre nossas escolas', 'educacao-noticia', 'Todas as notícias das escolas', 'https://google.com')) ?>
			<!-- end posts editorial -->

			<div class="my-5"></div>

			<!-- our school -->
			<section class="bg-[#F0F0F0] py-16">
				<div class="container grid grid-cols-1 xl:grid-cols-3 gap-16 justify-items-center px-4 xl:px-36">

					<!-- loop -->
					<?php for ($i = 0; $i < 6; $i++) : ?>
						<div class="our-school-item">
							<img src="<?php echo get_template_directory_uri() ?>/resources/images/icon-capela.png" alt="Valores cristãos" />

							<h6 class="text-xl xl:text-2xl font-bold font-red-hat-display text-center uppercase text-white">
								Valores cristãos
							</h6>
						</div>
					<?php endfor; ?>
					<!-- end loop -->
				</div>

				<div class="flex justify-center mt-20 px-4 xl:px-0">
					<a class="button-cta" href="#">
						Conheça nossas escolas
					</a>
				</div>
			</section>
			<!-- end our school -->

			<!-- gallery -->
			<?php echo get_template_part('template-parts/content', 'general-gallery') ?>
			<!-- gallery -->

			<!-- our pedagogue -->
			<section class="pt-32 pb-10 xl:pb-32">

				<div class="container flex flex-wrap justify-center px-4 xl:px-10">

					<div class="w-11/12 xl:w-5/12 xl:translate-x-10 relative flex justify-end items-end z-10">
						<div class="w-full xl:w-[440px] h-[320px] xl:h-[440px]">
							<img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri() ?>/resources/images/ensino-pedagoga.png" alt="Proposta pedagoga - Salvatorianos" />
						</div>
					</div>

					<div class="w-full xl:w-7/12 -translate-y-10 xl:translate-y-0 xl:-translate-x-10 relative flex items-end z-20">
						<div class="rounded-tl-[250px] rounded-tr-[250px] rounded-br-[250px] bg-gradient-purple py-24 px-4 xl:px-32">
							<p class="text-xl font-medium font-red-hat-display text-white">
								Lorem ipsum dolor sit amet, consectetur
								adipiscing elit. Pellentesque consectetur
								commodo ipsum in semper. <br />
								Curabitur eleifend rhoncus lorem, luctus
								sodales mauris laoreet vulputate. Nam velit
								nulla, cursus et mauris ac, hendrerit lacinia
								urna. Aenean eget augue consequat,
								aliquam massa non, mollis tortor. <br />
								Suspendisse potenti. Sed lacinia, tellus eu
								vehicula pretium, risus nisl tristique nisi, at
								pretium est sapien vel libero. Praesent id nibh
								sit amet sem ultricies euismod nec a mi. Etiam
								lobortis metus aliquet ipsum tristique mattis.
							</p>
						</div>
					</div>

					<div class="w-full xl:w-8/12 -translate-y-10 relative flex justify-center z-20">
						<p class="inline-block text-xl xl:text-3xl font-bold font-red-hat-display text-center uppercase text-white bg-gradient-green p-4">
							conheça nossa proposta pedagógica
						</p>
					</div>
				</div>
			</section>
			<!-- end our pedagogue -->

			<!-- blog -->
			<?php echo get_template_part('template-parts/content', 'general-blog') ?>
			<!-- blog -->

			<!-- free materials -->
			<?php echo get_template_part('template-parts/content', 'general-free-materials') ?>
			<!-- free materials -->
		<?php endwhile; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
