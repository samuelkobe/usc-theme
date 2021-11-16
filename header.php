<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		
		<meta property="og:title" content="<?php the_field( 'open_graph_title', 'option' ); ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:image" content="<?php if ( get_field( 'open_graph_image', 'option' ) ) { the_field( 'open_graph_image', 'option' ); } ?>" />
		<meta property="og:url" content="<?php the_field( 'open_graph_url', 'option' ); ?>" />
		<meta property="og:description" content="<?php bloginfo('description'); ?>" />

		<script src="https://unpkg.com/scrollreveal"></script>
		<script>
			ScrollReveal({ reset: true });
		</script>

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>
		<?php if ( ! function_exists( 'wp_body_open' ) ) {
			function wp_body_open() {
				do_action( 'wp_body_open' );
			}
		} ?>

		<!-- wrapper -->
		<div id="content-wrapper" class="wrapper">

			<header id="header" class="flex flex-row w-full h-auto bg-white opacity-70 fixed top-0 z-50 header-onload" role="banner">

				<div class="contained w-full justify-around">
					<div class="flex flex-row items-center w-full h-16 justify-between relative">

						<div class="flex flex-row items-center w-24 lg:w-auto py-4 order-1 z-20">
							<?php if (has_custom_logo()) : ?>
								<div class="flex flex-row lg:mr-4 w-24 2xl:w-36"><?php the_custom_logo(); ?></div>
							<?php else : ?>
								<p class="text-base"><?php bloginfo('title');?></p>
								<p class="text-xs"><?php bloginfo('description');?></p>
							<?php endif; ?>
						</div>

						<div class="visible lg:invisible block lg:hidden order-2 lg:order-3 w-8 h-4 lg:w-0 justify-center items-center z-20">
							<!-- button -->
							<button id="menu-button" class="hamburger w-8 flex flex-col focus:outline-none" type="button" name="navigation button" aria-label="navigation button">
								<span class="w-8 h-1 bg-grey-dark inline-block mb-2 transition-transform ease-out duration-200 origin-hamburger"></span>
								<span class="w-8 h-1 bg-grey-dark inline-block transition-transform ease-out duration-200 origin-hamburger"></span>
							</button>
							<!-- /button -->
						</div>

						<div id="menu" class="fixed lg:relative top-0 right-0 order-3 lg:order-2 w-full lg:w-auto lg:h-auto lg:min-h-0 z-10 lg:z-20 flex flex-col lg:flex-row lg:justify-end shadow-lg lg:shadow-none p-6 pt-36 lg:p-0 transform translate-x-full lg:transform-none lg:translate-x-0 transition-transform duration-0 lg:duration-0 lg:opacity-100 bg-grey-light lg:bg-transparent">
							<nav class="flex flex-row items-center justify-end text-grey-dark" role="navigation">
								<?php webokstarter_nav(); ?>
							</nav>
						</div>

					</div>
				</div>
				
			</header>
