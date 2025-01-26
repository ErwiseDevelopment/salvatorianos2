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
			$editorial_category_name = get_categories_setting()['editorials']['pe-jordan']['name'];

			echo get_template_part('template-parts/content', 'general-banner', get_query_custom('banners', $editorial_category_name))
			?>
			<!-- end banner -->

			<!-- posts editorial -->
			<?php
			$editorial_category_slug = get_categories_setting()['editorials']['pe-jordan']['slug'];

			echo get_template_part('template-parts/content', 'general-news-editorial', get_general_news_editorial_setting('Saiba tudo sobre nossas paróquias', $editorial_category_slug, 'Todas as notícias das paróquias', 'https://google.com'))
			?>
			<!-- end posts editorial -->

			<!-- photos -->
			<?php echo get_template_part('template-parts/content', 'jordan-photos') ?>
			<!-- end photos -->

			<!-- prayer -->
			<!-- <php echo get_template_part('template-parts/content', 'general-jordan-prayer') ?> -->
			<?php echo get_template_part('template-parts/content', 'general-prayer', get_general_prayer_setting('Enquanto houver um homem no mundo que não conheça a Deus e O ame acima de todas as coisas, você não pode descansar.', 'Bem-aventurado Francisco Jordan', 'conheça nosso fundador')) ?>
			<!-- end prayer -->

			<div class="mt-10"></div>

			<!-- blog -->
			<?php echo get_template_part('template-parts/content', 'general-blog', get_general_blog_setting($editorial_category_slug, 'pe-jordan')) ?>
			<!-- blog -->

			<div class="mt-20"></div>
		<?php endwhile; ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
