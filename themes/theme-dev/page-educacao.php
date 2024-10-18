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
			$editorial_slug = get_categories_setting()['editorials']['educacao']['name'];

			echo get_template_part('template-parts/content', 'general-banner', get_query_custom('banners', $editorial_slug));
			?> <!-- end banner -->

			<!-- news editorial -->
			<?php
			$editorial_category = get_categories_setting()['editorials']['educacao']['slug'];

			echo get_template_part('template-parts/content', 'general-news-editorial', get_general_news_editorial_setting('Saiba tudo sobre nossas escolas', $editorial_category, 'Todas as notícias das escolas', 'noticias?categoria=vocacional')) ?>
			<!-- end news editorial -->

			<div class="my-5"></div>

			<!-- our school -->
			<section class="bg-[#F0F0F0] py-16">
				<div class="container px-4 xl:px-36">

					<!-- desktop -->
					<div class="hidden xl:grid grid-cols-3 gap-16 justify-items-center">
						<?php
						if (have_rows('valores')):
							while (have_rows('valores')): the_row();
						?>
								<div class="our-school-child">
									<div class="our-school-item">
										<img src="<?php echo get_sub_field('icone') ?>" alt="<?php echo get_sub_field('titulo') ?> - Salvatorianos" />

										<h6 class="text-xl xl:text-2xl font-bold font-red-hat-display text-center uppercase text-white">
											<?php echo get_sub_field('titulo') ?>
										</h6>
									</div>
								</div>
						<?php
							endwhile;
						endif;
						?>
					</div>
					<!-- end desktop -->

					<!-- mobile -->
					<div class="col-span-full xl:hidden">

						<!-- swiper -->
						<div class="swiper swiper-values js-swiper-values">

							<div class="swiper-wrapper">

								<!-- slide -->
								<?php
								if (have_rows('valores')):
									while (have_rows('valores')): the_row();
								?>
										<div class="swiper-slide our-school-child">
											<div class="our-school-item">
												<img class="w-24" src="<?php echo get_sub_field('icone') ?>" alt="<?php echo get_sub_field('titulo') ?> - Salvatorianos" />

												<h6 class="text-lg lg:text-xl xl:text-2xl font-bold font-red-hat-display text-center uppercase text-white" style="line-height:100%">
													<?php echo get_sub_field('titulo') ?>
												</h6>
											</div>
										</div>
								<?php
									endwhile;
								endif;
								?>
								<!-- end slide -->
							</div>
						</div>
						<!-- end swiper -->
					</div>
					<!-- end mobile -->
				</div>

				<div class="flex justify-center mt-20 px-4 xl:px-0">
					<a class="button-cta" href="#">
						Conheça nossas escolas
					</a>
				</div>
			</section>
			<!-- end our school -->

			<!-- gallery -->
			<?php echo get_template_part('template-parts/content', 'general-gallery', get_query_custom('galeria', $editorial_slug)) ?>
			<!-- gallery -->

			<!-- our pedagogue -->
			<section class="pt-10 xl:py-32">

				<div class="container flex flex-wrap justify-center px-4 xl:px-10">

					<div class="w-5/12 translate-x-10 relative hidden xl:flex justify-end items-end z-10">
						<div class="w-full xl:w-[440px] h-[320px] xl:h-[440px]">
							<img class="w-full h-full object-cover" src="<?php echo get_template_directory_uri() ?>/resources/images/ensino-pedagoga.png" alt="Proposta pedagoga - Salvatorianos" />
						</div>
					</div>

					<div class="w-full xl:w-7/12 xl:-translate-x-10 relative flex items-end z-20">
						<div class="xl:rounded-tl-[250px] xl:rounded-tr-[250px] xl:rounded-br-[250px] bg-gradient-purple py-16 xl:py-24 px-4 xl:px-32">
							<p class="text-lg xl:text-xl font-medium font-red-hat-display text-white">
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

					<div class="w-11/12 xl:w-8/12 -translate-y-4 xl:-translate-y-10 relative flex justify-center z-20">
						<p class="inline-block text-xl xl:text-3xl font-bold font-red-hat-display text-center uppercase text-white bg-gradient-green p-4">
							conheça nossa proposta pedagógica
						</p>
					</div>
				</div>
			</section>
			<!-- end our pedagogue -->

			<!-- blog -->
			<?php
			$blog_category = get_editorials()['editoria-educacao']['categories']['blog'];

			echo get_template_part('template-parts/content', 'general-blog', get_general_blog_setting($blog_category, $editorial_slug)) ?>
			<!-- blog -->

			<!-- free materials -->
			<?php echo get_template_part('template-parts/content', 'general-free-materials', get_query_custom('materiais', $editorial_slug, 4)) ?>
			<!-- free materials -->
		<?php endwhile; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
