<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Theme Dev
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php while (have_posts()) : the_post(); ?>

			<section class="pt-6 pb-32">

				<div class="container flex flex-wrap">

					<div class="w-full">
						<img class="w-full h-[420px] object-cover" src="http://erwise.test/salvatorianos/wp-content/uploads/2024/08/vocacional-news-1.png" alt="" />

						<p class="text-sm font-semibold font-red-hat-display uppercase tracking-[2px] text-[#8DAA32] mt-8">
							11 de abril de 2024
						</p>

						<h1 class="text-5xl font-black font-red-hat-display text-[#7137F0] mt-4 pb-">
							<?php the_title() ?>
						</h1>

						<div class="w-[600px] flex flex-wrap items-center my-6">
							<div class="w-1/2 h-[10px] bg-gradient-green"></div>

							<div class="w-1/2 h-[2px] bg-[#E1E1E1]"></div>
						</div>
					</div>

					<div class="w-8/12 pr-8">
						<div class="flex gap-4">
							<?php $categories = get_the_category(get_the_ID()); ?>

							<!-- loop -->							
							<p class="text-lg font-bold font-red-hat-display uppercase text-center text-white bg-gradient-green py-1 px-8">
								<?php echo show_category_emphasis($categories); ?>
							</p>

							<p class="text-lg font-bold font-red-hat-display uppercase text-center text-white bg-gradient-green py-1 px-8">
								Vocacional
							</p>
							<!-- end loop -->
						</div>

						<span class="post-content">
							<?php the_content() ?>
						</span>

						<div class="flex justify-end mt-24">
							<a class="button-cta" href="#">
								Todas as notícias
							</a>
						</div>
					</div>

					<div class="w-4/12">
						<!-- loop -->
						<?php for($i = 0; $i < 3; $i++) : ?>
							<a class="border border-[#252525] block mb-6 last:mb-0" href="#">
								<div class="w-full h-[230px] overflow-hidden">
									<img class="w-full h-full object-cover" src="http://erwise.test/salvatorianos/wp-content/uploads/2024/08/vocacional-news-1.png" alt="" />
								</div>

								<div class="p-6">
									<p class="text-lg font-bold font-red-hat-display text-[#56913E]" style="line-height:100%">
										Vocacional

										<span class="block text-xs font-bold font-red-hat-display text-[#56913E]">
											11 de abril de 2024
										</span>
									</p>

									<h5 class="text-2xl font-black font-red-hat-display text-[#2C285B] mt-3" style="line-height:100%">
										3 histórias de pessoas que descobriram seu propósito
									</h5>

									<p class="transition hover:scale-90 inline-block text-xs font-bold font-red-hat-display text-center uppercase text-white bg-gradient-green py-2 px-8">
										Ler mais
									</p>
								</div>
							</a>
						<?php endfor; ?>
						<!-- end loop -->
					</div>
				</div>
			</section>
		<?php endwhile; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
