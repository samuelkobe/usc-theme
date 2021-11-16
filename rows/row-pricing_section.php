<section id="pricing" class="">
    <div class="contained items-start lg:items-center pt-12 lg:pt-24">
        
        <div class="flex flex-col relative items-start lg:items-center mb-8 lg:mb-12">
            <h2 class="text-2xl lg:text-3xl 2xl:text-4xl font-title object-reveal-short"><?php the_sub_field( 'section_title' ); ?></h2>
            <div class="absolute -bottom-3 bg-brand-main w-12 h-1 object-reveal-long"></div>
        </div>

        <?php if ( have_rows( 'pricing_options' ) ) : ?>
            <div class="flex flex-col lg:flex-row justify-between items-center w-full 2xl:w-11/12 object-reveal-long">
                <?php while ( have_rows( 'pricing_options' ) ) : the_row();?>
                    
                    <div class="flex flex-col items-center justify-end w-full lg:w-1/3 xl:w-1/4 xl:even:w-1/3 bg-grey-dark border-grey-dark even:bg-brand-main even:border-brand-main border-4 mt-4 mb-4 lg:mb-0 lg:mt-12 lg:even:mt-0 h-auto rounded">
                    
                        <div class="flex flex-col items-center justify-center w-full py-6">
                            <?php if ( get_sub_field( 'tag_toggle' ) == 1 ) : ?>
                                <p class="uppercase text-brand-bright italic text-2xl xl:text-3xl mb-2"><?php the_sub_field( 'tag' ); ?></p>
                            <?php else : ?>
                                <?php // echo Nothing here; ?>
                            <?php endif; ?>
                            <h3 class="font-bold text-xl xl:text-2xl text-white"><?php the_sub_field( 'title' ); ?> - <span class="text-3xl"><?php the_sub_field( 'price' ); ?></span></h3>
                        </div>
                        <?php if ( have_rows( 'options' ) ) : ?>
                            <div class="bg-white w-full">
                                <?php while ( have_rows( 'options' ) ) : the_row(); ?>
                                <div class="flex flex-col items-center justify-center border-b-2 border-grey-light">
                                    <p class="leading-loose h-10 flex items-center justify-center"><?php the_sub_field( 'option_details' ); ?></p>
                                </div>
                                <?php endwhile; ?>
                            </div>
                        <?php else : ?>
                            <?php // no rows found ?>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <?php // no rows found ?>
        <?php endif; ?>
        <div class="flex flex-col items-center pt-4 lg:pt-8 w-full object-reveal-long">
            <?php $cta = get_sub_field( 'cta' ); ?>
            <?php if ( $cta ) : ?>
                <a class="button" href="<?php echo esc_url( $cta['url'] ); ?>" target="<?php echo esc_attr( $cta['target'] ); ?>"><?php echo esc_html( $cta['title'] ); ?></a>
            <?php endif; ?>
            <p class="mt-3 lg:mt-6"><?php the_sub_field( 'more_info' ); ?></p>
        </div>

    </div>
</section>