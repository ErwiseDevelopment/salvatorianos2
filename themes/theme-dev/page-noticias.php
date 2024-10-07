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
			<!-- news detail -->
			<section class="pt-24">

				<div class="container flex gap-4 px-24">

					<div class="w-8/12">
						<a class="news-item" href="#">
							<img class="news-item-thumbnail" src="<?php echo get_template_directory_uri() ?>/resources/images/home-news-1.png" alt="News - Salvatorianos" />

							<div class="bottom-0 left-0 absolute z-10 p-8">
								<span class="news-item-emphasis text-base">
									Destaque
								</span>

								<h2 class="news-item-title text-2xl">
									O Papa: como Jesus, aproximar-se de quem sofre com compaixão e inclusão
								</h2>

								<p class="news-item-read-more text-sm text-[#8DAA32]">
									Leia mais >
								</p>
							</div>
						</a>
					</div>

					<div class="w-4/12">

						<div class="border border-black bg-[#EDEDED] py-8 px-4">
							<h3 class="text-4xl font-black font-red-hat-display text-center text-[#7137F0]">
								Categorias
							</h3>

							<ul class="mt-6">

								<?php for ($i = 0; $i < 7; $i++) : ?>
									<li class="mb-2 last:mb-0">
										<a class="block text-xl font-medium font-red-hat-display text-center text-white bg-red-500 py-3" href="#">
											Institucional
										</a>
									</li>
								<?php endfor; ?>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- end news detail -->

			<!-- news -->
			<section class="pt-24 pb-16">

				<div class="container grid grid-cols-4 gap-4">

					<!-- loop -->
					<?php for ($i = 0; $i < 12; $i++) : ?>
						<?php echo get_template_part('components/new-item') ?>
					<?php endfor; ?>
					<!-- end loop -->
				</div>
			</section>
			<!-- end news -->
		<?php endwhile; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
