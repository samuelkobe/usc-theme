<section class="contained my-8 xl:my-40 object-reveal-short">
    <div class="hidden lg:inline w-3/4 h-full-plus absolute -top-24 right-0 bg-brand-main opacity-10 -z-1"></div>
    <div class="flex flex-col lg:flex-row items-center w-full lg:w-11/12 mr-0 lg:mr-1/12 pl-0 lg:pl-1/12 py-0 lg:py-1/12 bg-white rounded shadow-2xl shadow-brand-main">


            <?php if ( get_sub_field( 'image_orientation' ) == 1 ) : ?>
				<?php $image_settings = 'order 1'; ?>
                <?php $content_settings = 'order 2'; ?>
			<?php else : ?>
				<?php // echo 'false'; ?>
			<?php endif; ?>

            <div class="flex flex-col h-full lg:flex-row">
                <div class="w-full h-full lg:w-1/3">
                    <?php if ( have_rows( 'image_settings' ) ) : ?>
                        <?php while ( have_rows( 'image_settings' ) ) : the_row(); ?>
                            <?php $colour = get_sub_field( 'colours' ); ?>
                            <?php $image = get_sub_field( 'image' ); ?>
                            <?php if ( $image ) : ?>
                                <div class="w-full h-full relative">
                                    <img class="w-full h-96 lg:w-auto xl:h-128 object-cover rounded" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                                    <div class="absolute left-0 -bottom-1 h-3 w-full lg:rounded-b bg-brand-<?php echo $colour; ?> z-10 pointer-events-none"></div>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                <div class="w-full lg:w-2/3 p-8 lg:px-16 lg:py-0">
                    <?php if ( have_rows( 'content_settings' ) ) : ?>
                        <?php while ( have_rows( 'content_settings' ) ) : the_row(); ?>
                            <h2 class="text-xl sm:text-3xl xl:text-4xl xl:leading-snug font-title font-bold text-brand-dark text-left mb-4 lg:mb-6"><?php the_sub_field( 'title' ); ?></h2>
                            <p class="text-base lg:text-xl"><?php the_sub_field( 'content' ); ?></p>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
    </div>
</section>