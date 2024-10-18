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
			$editorial_slug = get_categories_setting()['editorials']['paroquias']['name'];

			echo get_template_part('template-parts/content', 'general-banner', get_query_custom('banners', $editorial_slug))
			?>
			<!-- end banner -->

			<!-- posts editorial -->
			<?php
			$editorial_category = get_categories_setting()['editorials']['paroquias']['slug'];

			echo get_template_part('template-parts/content', 'general-news-editorial', get_general_news_editorial_setting('Saiba tudo sobre nossas paróquias', $editorial_category, 'Todas as notícias das paróquias', 'noticias?categoria=paroquias')) ?>
			<!-- end posts editorial -->

			<!-- parishes carousel -->
			<?php echo get_template_part('template-parts/content', 'parishes-carousel') ?>
			<!-- end parishes carousel -->

			<!-- prayer -->
			<?php echo get_template_part('template-parts/content', 'general-jordan-prayer') ?>
			<!-- end prayer -->

			<div class="mt-10"></div>

			<!-- blog -->
			<?php
			$blog_category = get_editorials()['editoria-paroquias']['categories']['blog'];

			echo get_template_part('template-parts/content', 'general-blog', get_general_blog_setting($blog_category, $editorial_slug));
			?>
			<!-- blog -->

			<!-- free materials -->
			<?php echo get_template_part('template-parts/content', 'general-free-materials', get_query_custom('materiais', $editorial_slug, 4)) ?>
			<!-- free materials -->
		<?php endwhile; ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
