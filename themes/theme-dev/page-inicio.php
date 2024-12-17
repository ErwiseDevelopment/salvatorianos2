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
			$editorial_category_name = get_categories_setting()['editorials']['portal']['name'];

			echo get_template_part('template-parts/content', 'general-banner', get_query_custom('banners', $editorial_category_name))
			?>
			<!-- end banner -->

			<!-- news -->
			<?php echo get_template_part('template-parts/content', 'home-news') ?>
			<!-- end news -->

			<!-- gallery -->
			<?php echo get_template_part('template-parts/content', 'general-gallery', ['query' => get_query_custom('galeria', $editorial_category_name)]) ?>
			<!-- end gallery -->

			<!-- videos -->
			<?php echo get_template_part('template-parts/content', 'home-videos', get_query_custom('videos', $editorial_category_name)) ?>
			<!-- end videos -->

			<!-- banner welcome -->
			<?php echo get_template_part('template-parts/content', 'general-banner-welcome') ?>
			<!-- end banner welcome -->

			<!-- blog -->
			<?php
			$editorial_category_slug = get_categories_setting()['editorials']['portal']['slug'];

			echo get_template_part('template-parts/content', 'general-blog', get_general_blog_setting($editorial_category_slug));
			?>
			<!-- end blog -->

			<!-- free materials -->
			<?php echo get_template_part('template-parts/content', 'general-free-materials', get_query_custom('materiais', $editorial_category_name, 4)) ?>
			<!-- end free materials -->

			<!-- prayer -->
			<?php echo get_template_part('template-parts/content', 'general-prayer', get_general_prayer_setting('sê um verdadeiro apóstolo de jesus cristo, e não sossegues até que tenhas levado a palavra de deus a todos os recantos da terra.', 'Bem-aventurado Francisco Jordan', 'reze pela canonização do pe. jordan')) ?>
			<!-- end prayer -->

			<!-- candle -->
			<?php echo get_template_part('template-parts/content', 'home-candle') ?>
			<!-- end candle -->

			<div class="mt-10 xl:mt-20"></div>
		<?php endwhile; ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
