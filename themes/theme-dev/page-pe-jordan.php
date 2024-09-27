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
			<?php echo get_template_part('template-parts/content', 'general-banner', get_general_banner('pe-jordan')) ?>
			<!-- end banner -->

			<!-- posts editorial -->
			<?php echo get_template_part('template-parts/content', 'general-posts-editorial', get_general_posts_editorial_attributes('Saiba tudo sobre nossas paróquias', 'paroquia-noticia', 'Todas as notícias das paróquias', 'https://google.com')) ?>
			<!-- end posts editorial -->

			<!-- photos -->
			<?php echo get_template_part('template-parts/content', 'jordan-photos') ?>
			<!-- end photos -->

			<!-- prayer -->
			<?php echo get_template_part('template-parts/content', 'general-jordan-prayer') ?>
			<!-- end prayer -->

			<div class="mt-10"></div>

			<!-- blog -->
			<?php echo get_template_part('template-parts/content', 'general-blog') ?>
			<!-- blog -->

			<div class="mt-20"></div>
		<?php endwhile; ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
