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

<!-- <php
echo "<pre>";
var_dump(get_term_by('slug', 'brasil', 'localizacao')->term_id);
echo "</pre>";
?> -->

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php while (have_posts()) : the_post(); ?>

			<section class="py-10">

				<div class="container">

					<div class="rounded-lg grid grid-cols-1 xl:grid-cols-3 gap-4 bg-[#28235C] mb-6 py-10 px-6">

						<?php for ($i = 0; $i < 3; $i++) : ?>
							<div class="flex flex-col justify-center items-center gap-2 lg:gap-4">
								<p class="text-3xl lg:text-5xl font-bold font-red-hat-display text-center text-white">
									145
								</p>

								<p class="text-lg lg:text-2xl font-normal font-red-hat-display text-center uppercase text-white">
									Obras em todo o Brasil
								</p>
							</div>
						<?php endfor; ?>
					</div>

					<div class="rounded-lg bg-[#28235C] py-10 px-6">

						<form action="" method="GET">

							<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-4">


								<div class="flex flex-col gap-2">
									<label
										class="font-bold text-white ml-3"
										for="pais">
										Escolha um pais:
									</label>

									<select
										class="rounded-lg p-2 js-field-country"
										type="text"
										name="pais">
										<option value="0">Nenhuma</option>
										<?php
										$countries = get_terms(array(
											'taxonomy'   => 'localizacao',
											'hide_empty' => false,
											'parent'     => 0
										));

										foreach ($countries as $country):
										?>
											<option value="<?php echo $country->slug; ?>"><?php echo $country->name; ?></option>
										<?php endforeach; ?>
									</select>
								</div>

								<div class="flex flex-col gap-2">
									<label
										class="font-bold text-white ml-3"
										for="estado">
										Escolha um estado:
									</label>

									<select
										class="rounded-lg p-2 js-field-state"
										type="text"
										name="estado">
										<option value="0">Nenhuma</option>
										<?php
										if (isset($_GET['pais'])) :
											$country = $_GET['pais'];

											$country_id = get_term_by('slug', $country, 'localizacao')->term_id;

											$states = get_terms(array(
												'taxonomy'   => 'localizacao',
												'hide_empty' => false,
												'parent'     => $country_id
											));

											foreach ($states as $state):
										?>
												<option value="<?php echo $state->slug; ?>"><?php echo $state->name; ?></option>

										<?php
											endforeach;
										endif;
										?>
									</select>
								</div>

								<div class="flex flex-col gap-2">
									<label
										class="font-bold text-white ml-3"
										for="cidade">
										Escolha uma cidade:
									</label>

									<select
										class="rounded-lg p-2 js-field-city"
										type="text"
										name="cidade">
										<option value="0">Nenhuma</option>
										<?php
										if (isset($_GET['estado'])) :
											$state = $_GET['estado'];

											$state_id = get_term_by('slug', $state, 'localizacao')->term_id;

											$cities = get_terms(array(
												'taxonomy'   => 'localizacao',
												'hide_empty' => false,
												'parent'     => $state_id
											));

											foreach ($cities as $city):
										?>
												<option value="<?php echo $city->slug; ?>"><?php echo $city->name; ?></option>

										<?php
											endforeach;
										endif;
										?>
									</select>
								</div>
							</div>
						</form>
					</div>
				</div>
			</section>

			<section class="py-10">

				<div class="container grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">

					<?php
					if (isset($_GET['pais']) && isset($_GET['estado']) == false && isset($_GET['cidade']) == false) {
						$country = $_GET['pais'];

						$args = array(
							'posts_per_page' => -1,
							'post_type'      => 'local',
							'order'          => 'DESC',
							'tax_query'      => array(
								'relation' => 'AND',
								array(
									'taxonomy' => 'localizacao',
									'field'    => 'slug',
									'terms'    => array($country)
								)
							)
						);
					} elseif (isset($_GET['pais']) && isset($_GET['estado']) && isset($_GET['cidade']) == false) {
						$country = $_GET['pais'];

						$state = $_GET['estado'];

						$args = array(
							'posts_per_page' => -1,
							'post_type'      => 'local',
							'order'          => 'DESC',
							'tax_query'      => array(
								'relation' => 'AND',
								array(
									'taxonomy' => 'localizacao',
									'field'    => 'slug',
									'terms'    => array($country)
								),
								array(
									'taxonomy' => 'localizacao',
									'field'    => 'slug',
									'terms'    => array($state)
								)
							)
						);
					} elseif (isset($_GET['pais']) && isset($_GET['estado']) && isset($_GET['cidade'])) {
						$country = $_GET['pais'];

						$state = $_GET['estado'];

						$city = $_GET['cidade'];

						$args = array(
							'posts_per_page' => -1,
							'post_type'      => 'local',
							'order'          => 'DESC',
							'tax_query'      => array(
								'relation' => 'AND',
								array(
									'taxonomy' => 'localizacao',
									'field'    => 'slug',
									'terms'    => array($country)
								),
								array(
									'taxonomy' => 'localizacao',
									'field'    => 'slug',
									'terms'    => array($state)
								),
								array(
									'taxonomy' => 'localizacao',
									'field'    => 'slug',
									'terms'    => array($city)
								)
							)
						);
					} else {
						$args = array(
							'posts_per_page' => -1,
							'post_type'      => 'local',
							'order'          => 'DESC'
						);
					}

					$locations = new WP_Query($args);

					if ($locations->have_posts()) :
						while ($locations->have_posts()) : $locations->the_post();
					?>
							<div class="border rounded-lg overflow-hidden flex flex-col">
								<div class="bg-[#28235C] py-2 px-4">
									<h3 class="text-lg font-bold font-red-hat-display text-white">
										<?php the_title() ?>
									</h3>
								</div>

								<div class="border-b p-4">

									<div class="w-full h-[100px]">
										<?php the_post_thumbnail('post-thumbnail', array(
											'class' => 'w-full h-full object-contain',
											'alt'   => get_the_title()
										)); ?>
									</div>
								</div>

								<div class="bg-white p-4">
									<?php if (get_field('cep')): ?>
										<p class="font-red-hat-display text-gray-500">
											<strong>CEP:</strong> <?php echo get_field('cep'); ?>
										</p>
									<?php endif; ?>

									<?php if (get_field('endereco')): ?>
										<p class="font-red-hat-display text-gray-500">
											<strong>Endereço:</strong> <?php echo get_field('endereco'); ?>
										</p>
									<?php endif; ?>

									<?php if (get_field('telefone')): ?>
										<p class="font-red-hat-display text-gray-500">
											<strong>Telefone:</strong> <?php echo get_field('telefone'); ?>
										</p>
									<?php endif; ?>

									<?php if (get_field('celular')): ?>
										<p class="font-red-hat-display text-gray-500">
											<strong>Celular:</strong> <?php echo get_field('celular'); ?>
										</p>
									<?php endif; ?>

									<?php if (get_field('e-mail')): ?>
										<p class="font-red-hat-display text-gray-500">
											<strong>E-mail:</strong> <?php echo get_field('e-mail'); ?>
										</p>
									<?php endif; ?>

									<?php if (get_field('site')): ?>
										<p class="font-red-hat-display text-gray-500">
											<strong>Site:</strong> <?php echo get_field('site'); ?>
										</p>
									<?php endif; ?>
								</div>
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
