<?php $selected_speaker = get_sub_field( 'selected_speaker' ); ?>
<?php if ( $selected_speaker ) : ?>
    <?php $post = $selected_speaker; ?>
    <?php setup_postdata( $post ); ?> 

    <div class="flex flex-col lg:flex-row items-center w-full">

            <div class="flex flex-col w-full h-full lg:flex-row">
                <div class="w-full h-full lg:w-1/3 order-1">
                    <?php if ( get_field( 'speaker_image_toggle' ) == 1 ) : ?>
                        <?php $speaker_image = get_field( 'speaker_image' ); ?>
                        <?php if ( $speaker_image ) : ?>
                            <div class="w-full h-full relative">
                                <img class="w-full h-108 xl:h-128 object-cover rounded" src="<?php echo esc_url( $speaker_image['url'] ); ?>" alt="<?php echo esc_attr( $speaker_image['alt'] ); ?>" />
                                <div class="absolute left-0 -bottom-1 h-3 w-full lg:rounded-b bg-brand-main z-10 pointer-events-none"></div>
                            </div>
                        <?php endif; ?>
                    <?php else : ?>
                        <div class="w-full h-full relative">
                            <img class="w-full h-108 xl:h-128 object-cover rounded" src="<?php bloginfo('template_url'); ?>/img/logo-icon.jpg" alt="Universal Spiriualist Centre Icon Logo" />
                        </div>
                    <?php endif; ?>
                </div>

                <div class="w-full lg:w-2/3 p-8 lg:px-1/24 lg:py-0 order-2 lg:pr-0">
                    <h3 class="text-lg lg:text-2xl font-title font-bold text-brand-black text-left mb-2 lg:mb-4"><?php the_title(); ?></h3>
                    <div class="lg:-bottom-7 h-1 lg:h-2 w-12 lg:w-16 rounded bg-brand-main z-10 pointer-events-none mb-2 lg:mb-4"></div>
                    <p class="text-sm lg:text-lg"><?php the_field( 'speaker_bio' ); ?></p>
                    <?php if ( get_field( 'speaker_contact_toggle' ) == 1 ) : ?>
                        <p class="text-base lg:text-xl text-brand-black mt-4">Email: <a href="mailto:<?php the_field( 'speakers_email' ); ?>" target="_blank"><?php the_field( 'speakers_email' ); ?></a></p>
                    <?php else : ?>
                        <?php // no speaker contact information ?>
                    <?php endif; ?>
                </div>
            </div>
    </div>

<?php wp_reset_postdata(); ?>
<?php endif; ?>