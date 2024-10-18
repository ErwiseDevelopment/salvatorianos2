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
			$editorial_slug = get_categories_setting()['editorials']['institucional']['name'];

			echo get_template_part('template-parts/content', 'general-banner', get_query_custom('banners', $editorial_slug))
			?>
			<!-- end banner -->

			<!-- news editorial -->
			<?php
			$editorial_category = get_categories_setting()['editorials']['institucional']['slug'];

			echo get_template_part('template-parts/content', 'general-news-editorial', get_general_news_editorial_setting('Confira o que está acontecendo em nossa Província', $editorial_category, 'Todas as notícias institucionais', 'noticias'))
			?>
			<!-- end news editorial -->

			<!-- our pedagogue -->
			<?php
			$pedagogue_image = get_template_directory_uri()  . '/resources/images/carisma.png';

			$pedagogue_title = 'Os Salvatorianos são o resultado do amor e do sonho do Pe. Francisco Maria da Cruz Jordan.';

			$pedagogue_description = 'Somos uma congregação religiosa que busca que Jesus seja conhecido e amado como o Salvador do Mundo. Queremos envolver a todos neste sonho, nesta forma de vida. Estamos presentes em muitos países, mais de 30, e queremos crescer ainda mais. Venha nos conhecer!';

			$pedagogue_button_title = 'Conheça nossa carisma';

			echo get_template_part('template-parts/content', 'general-pedagogue', get_general_pedagogue_setting($pedagogue_image, $pedagogue_title, $pedagogue_description, $pedagogue_button_title))
			?>
			<!-- end our pedagogue -->

			<!-- blog -->
			<?php
			$blog_category = get_editorials()['editoria-institucional']['categories']['blog'];

			echo get_template_part('template-parts/content', 'general-blog', get_general_blog_setting($blog_category))
			?>
			<!-- blog -->

			<!-- jordan prayer -->
			<?php echo get_template_part('template-parts/content', 'general-jordan-prayer') ?>
			<!-- jordan prayer -->

			<div class="mt-10"></div>
		<?php endwhile; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
