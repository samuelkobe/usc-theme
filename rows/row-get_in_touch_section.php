<section id="contact" class="bg-grey-dark text-grey-light mt-20">
    <div class="contained items-start lg:items-center py-12 lg:py-24">

        <div class="flex flex-col relative items-start lg:items-center mb-8 lg:mb-12">
            <h2 class="text-2xl lg:text-3xl 2xl:text-4xl font-title object-reveal-short"><?php the_sub_field( 'section_title' ); ?></h2>
            <div class="absolute -bottom-3 bg-brand-main w-12 h-1 object-reveal-long"></div>
        </div>

        <div class="font-sans text-base lg:text-lg 2xl:text-xl lg:text-center w-full lg:w-3/4 mb-12 object-reveal-long">
            <?php the_sub_field( 'section_content' ); ?>
        </div>

        <?php if ( have_rows( 'contact_methods' ) ) : ?>
             <div class="flex flex-col lg:flex-row justify-between items-center w-full 2xl:w-11/12">
                <?php while ( have_rows( 'contact_methods' ) ) : the_row(); ?>
                    <div class="flex flex-col items-center justify-center w-full lg:w-1/3 mb-4 lg:mb-0 mt-4 lg:mt-12 object-reveal-long">                
                        <?php $icon = get_sub_field( 'icon' ); ?>
                        <?php if ( $icon ) : ?>
                            <img width='64' height='64' src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                        <?php endif; ?>
                        <?php $call_to_action = get_sub_field( 'call_to_action' ); ?>
                        <?php if ( $call_to_action ) : ?>
                            <a class="hover:underline mt-4 lg:mt-8 mb-4 lg:mb-0" rel="noreferrer" href="<?php echo esc_url( $call_to_action['url'] ); ?>" target="<?php echo esc_attr( $call_to_action['target'] ); ?>"><?php echo esc_html( $call_to_action['title'] ); ?></a>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <?php // no rows found ?>
        <?php endif; ?>

        <div class="flex flex-col items-center justify-center mt-12 lg:mt-24 object-reveal-long">
            <div class="font-title lg:text-center w-full mb-4 lg:mb-12">
                <h3 class="text-2xl xl:text-3xl">Inquiry Form</h3>
            </div>
            <div class="flex flex-col items-center justify-center w-full">
                <div class="w-full xl:w-192"><?php the_sub_field( 'form_embed' ); ?></div>
            </div>
        </div>

    </div>
</section>

