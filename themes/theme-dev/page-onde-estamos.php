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

					<div class="rounded-lg hidden bg-[#28235C] py-10 px-6">

						<form action="">

							<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-4">


								<div class="flex flex-col gap-2">
									<label
										class="font-bold text-white ml-3"
										for="pais">
										Escolha um pais:
									</label>

									<select
										class="rounded-lg p-2"
										type="text"
										name="pais">
										<option value="0">Nenhuma</option>
									</select>
								</div>

								<div class="flex flex-col gap-2">
									<label
										class="font-bold text-white ml-3"
										for="estado">
										Escolha um estado:
									</label>

									<select
										class="rounded-lg p-2"
										type="text"
										name="estado">
										<option value="0">Nenhuma</option>
									</select>
								</div>

								<div class="flex flex-col gap-2">
									<label
										class="font-bold text-white ml-3"
										for="cidade">
										Escolha uma cidade:
									</label>

									<select
										class="rounded-lg p-2"
										type="text"
										name="cidade">
										<option value="0">Nenhuma</option>
									</select>
								</div>
							</div>
						</form>
					</div>
				</div>
			</section>

			<section class="py-10">

				<div class="container grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">

					<?php for ($i = 0; $i < 12; $i++): ?>
						<div class="border rounded-lg overflow-hidden flex flex-col">
							<div class="bg-[#28235C] py-2 px-4">
								<h3 class="text-lg font-bold font-red-hat-display text-white">
									Nome do post 0<?php echo $i; ?>
								</h3>
							</div>

							<div class="border-b p-4">

								<div class="w-full h-[100px] bg-[#28235C]"></div>
							</div>

							<div class="bg-white p-4">
								<p class="font-red-hat-display text-gray-500">
									<strong>CEP:</strong> 00000-000
								</p>

								<p class="font-red-hat-display text-gray-500">
									<strong>Endereço:</strong> Av. Rua, N 000 - AA - AAAA
								</p>

								<p class="font-red-hat-display text-gray-500">
									<strong>Celular:</strong> +55 (xx) 99999-9999
								</p>

								<p class="font-red-hat-display text-gray-500">
									<strong>E-mail:</strong> email@email.com
								</p>

								<p class="font-red-hat-display text-gray-500">
									<strong>Site:</strong> https://google.com
								</p>

								<p class="font-red-hat-display text-gray-500">
									<strong>Cidade:</strong> Cidade - Estado
								</p>
							</div>
						</div>
					<?php endfor; ?>
				</div>
			</section>
		<?php endwhile; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
