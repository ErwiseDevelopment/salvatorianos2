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
			<?php echo get_template_part('template-parts/content', 'home-banner') ?>
			<!-- end banner -->

			<!-- news -->
			<?php echo get_template_part('template-parts/content', 'home-news') ?>
			<!-- news -->

			<!-- gallery -->
			<?php echo get_template_part('template-parts/content', 'home-gallery') ?>
			<!-- gallery -->

			<!-- videos -->
			<?php echo get_template_part('template-parts/content', 'home-videos') ?>
			<!-- videos -->

			<!-- banner welcome -->
			<?php echo get_template_part('template-parts/content', 'home-banner-welcome') ?>
			<!-- banner welcome -->

			<!-- blog -->
			<?php echo get_template_part('template-parts/content', 'home-blog') ?>
			<!-- blog -->

			<!-- free materials -->
			<?php echo get_template_part('template-parts/content', 'home-free-materials') ?>
			<!-- free materials -->

			<!-- prayer -->
			<?php echo get_template_part('template-parts/content', 'home-prayer') ?>
			<!-- prayer -->

			<!-- candle -->
			<?php echo get_template_part('template-parts/content', 'home-candle') ?>
			<!-- candle -->

			<!-- newsletter -->
			<?php echo get_template_part('template-parts/content', 'newsletter') ?>
			<!-- newsletter -->
		<?php endwhile; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
