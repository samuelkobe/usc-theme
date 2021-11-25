<?php get_header(); ?>

	<main role="main">

		<?php get_template_part('parts/_page-hero'); ?>
			
		<?php
		if (is_front_page()) {
			get_template_part('parts/_page-notices'); 
		} else {
			//nothing should be shown unless on front page.
		}
		?>

		<?php // <section> added inside row loop
		if (have_rows('rows')):
			// loop through the rows of data
			while (have_rows('rows')) : the_row();
				$layout = get_row_layout();
				include 'rows/row-' . $layout . '.php';
			endwhile;
		endif; ?>

		<section class="contained items-center justify-center h-96 w-full bg-green-500">
			<h1>Remove me - page.php</h1>
		</section>

		<section class="contained items-center justify-center h-96 w-full bg-blue-500">
			<h1>Remove me - page.php</h1>
		</section>

		<section class="contained items-center justify-center h-96 w-full bg-yellow-500">
			<h1>Remove me - page.php</h1>
		</section>

	</main>

<?php get_footer(); ?>