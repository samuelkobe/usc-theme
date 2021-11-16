			<!-- footer -->
			<footer class="footer bg-grey-dark text-grey-light pt-8 lg:pt-0" role="contentinfo">
                	
				<div class="contained flex flex-col lg:flex-row lg:items-start justify-center lg:justify-start w-full pb-8 lg:pb-12">

					<div class="flex flex-row items-center justify-center lg:justify-start w-full lg:w-1/4 h-12 lg:h-24">
						<?php if ( get_field( 'text_or_logo_file_toggle', 'option' ) == 1 ) : ?>
							<?php $footer_logo = get_field( 'footer_logo', 'option' ); ?>
							<?php if ( $footer_logo ) : ?>
								<img width='160' height='51' class="w-32 lg:w-40" src="<?php echo esc_url( $footer_logo['url'] ); ?>" alt="<?php echo esc_attr( $footer_logo['alt'] ); ?>" />
							<?php endif; ?>
						<?php else : ?>
							<h1><?php the_field( 'footer_title', 'option' ); ?></h1>
						<?php endif; ?>
					</div>

					<p class="flex flex-row items-center justify-center w-full lg:w-1/2 text-center h-12 lg:h-24 text-sm lg:text-base">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php _e('Powered by', 'web-ok-starter'); ?> Web Ok Solutions Inc.</p>

					<div class="flex flex-row w-full lg:w-1/4 justify-center lg:justify-end">
						<?php if ( have_rows( 'social_media', 'option' ) ) : ?>
							<?php while ( have_rows( 'social_media', 'option' ) ) : the_row(); ?>
							<a class="flex flex-row items-center justify-center mx-4 lg:mx-0 h-12 lg:h-24" href="<?php the_sub_field( 'url' ); ?>" target="_blank" rel="noreferrer">
								<?php $icon = get_sub_field( 'icon' ); ?>
								<?php if ( $icon ) : ?>
									<img width='24' height='24' class="w-6 object-contain" src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
								<?php endif; ?>
								<p class="ml-4"><?php the_sub_field( 'title' ); ?></p>
							</a>
							<?php endwhile; ?>
						<?php else : ?>
							<?php // no rows found ?>
						<?php endif; ?>
					</div>

				</div>

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->
		<script type="text/javascript">
			ScrollReveal().reveal('.object-reveal-short', { delay: 150, easing: 'ease-in-out', distance: '3rem', reset: false });
			ScrollReveal().reveal('.object-reveal-long', { delay: 250, easing: 'ease-in-out', distance: '6rem', reset: false });
		</script>
		<?php wp_footer(); ?>

	</body>
</html>
