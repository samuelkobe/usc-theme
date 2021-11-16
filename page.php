<?php get_header(); ?>

	<main role="main">

		<?php get_template_part('parts/_page-hero'); ?>

		<?php get_template_part('parts/_header-banner'); ?>

		<?php // <section> added inside row loop
		if (have_rows('rows')):
			// loop through the rows of data
			while (have_rows('rows')) : the_row();
				$layout = get_row_layout();
				include 'rows/row-' . $layout . '.php';
			endwhile;
		endif; ?>

	</main>

<?php get_footer(); ?>


