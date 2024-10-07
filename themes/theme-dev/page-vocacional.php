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
			$editorial_slug = get_editorials()['editoria-vocacional']['categories']['slug'];

			echo get_template_part('template-parts/content', 'general-banner', get_query_custom('banners', $editorial_slug));
			?>
			<!-- end banner -->

			<!-- news editorial -->
			<?php
			$news_category = get_editorials()['editoria-vocacional']['categories']['news'];

			echo get_template_part('template-parts/content', 'general-news-editorial', get_general_news_editorial_setting('Saiba tudo sobre nossas vocações', $news_category, 'Todas as notícias vocacionais', 'noticias?categoria=vocacional'))
			?>
			<!-- end news editorial -->

			<!-- gallery -->
			<?php echo get_template_part('template-parts/content', 'general-gallery', get_query_custom('galeria', $editorial_slug)) ?>
			<!-- gallery -->

			<!-- banner welcome -->
			<?php echo get_template_part('template-parts/content', 'general-banner-welcome') ?>
			<!-- banner welcome -->

			<!-- our pedagogue -->
			<section class="py-32">

				<div class="container flex flex-wrap justify-center px-0">

					<div class="w-5/12 translate-x-10 relative flex justify-end items-end z-10">
						<div class="w-full h-[560px]">
							<img class="w-full h-full object-contain" src="<?php echo get_template_directory_uri() ?>/resources/images/vocacoes.png" alt="Vocações - Salvatorianos" />
						</div>
					</div>

					<div class="w-7/12 -translate-x-10 flex items-end">
						<div class="rounded-tl-[250px] rounded-tr-[250px] rounded-br-[250px] bg-gradient-purple py-24 px-32">
							<p class="text-2xl font-medium font-red-hat-display text-white" style="line-height:140%">
								A vida religiosa Salvatoriana é uma maneira de
								viver o seguimento de Jesus como Salvador
								do mundo.

								<br />

								<span class="text-[#A1E000]">
									Ser religioso Salvatoriano é crer na vida,
									é confiar na ação de Deus, é estar cheio
									de esperança, é cultivar ideais nobres, é
									envolver a todos na construção de um
									mundo melhor.
								</span>

								<br />

								O Salvatoriano é aquele que se sente salvo
								por Jesus, já que Ele é seu amigo, irmão e
								Senhor e por isso quer conduzir outros à
								salvação.
							</p>
						</div>
					</div>

					<div class="w-8/12 -translate-y-10 relative flex justify-center z-20">
						<p class="inline-block text-3xl font-bold font-red-hat-display text-center uppercase text-white bg-gradient-green p-4">
							saiba mais sobre nossas vocações
						</p>
					</div>
				</div>
			</section>
			<!-- end our pedagogue -->

			<!-- blog -->
			<?php
			$blog_category = get_editorials()['editoria-vocacional']['categories']['blog'];

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
