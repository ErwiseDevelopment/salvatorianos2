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

			<section class="py-14">

				<div class="container grid grid-cols-1 xl:grid-cols-4 gap-4">

					<?php
					$args = array(
						'posts_per_page' => -1,
						'post_type'      => 'galeria',
						'order'          => 'DESC'
					);

					$albums = new WP_Query($args);

					if ($albums->have_posts()):
						while ($albums->have_posts()): $albums->the_post();
					?>
							<div class="col-span-1">
								<a class="gallery-item" href="<?php the_permalink() ?>">
									<img class="w-full h-[400px] 2xl:h-[500px] object-cover block" src="<?php echo get_field('capa_galeria') ?>" alt="<?php the_title() ?> - Salvatorianos" />

									<div class="gallery-item-box">
										<p class="gallery-item-title">
											<?php the_title() ?>
										</p>

										<p class="gallery-item-read-more">
											ver mais
										</p>
									</div>
								</a>
							</div>
					<?php
						endwhile;
					endif;

					wp_reset_query();
					?>
				</div>
			</section>
		<?php endwhile; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
