<section class="relative flex flex-col object-reveal-short">

    <div class="contained py-6 lg:py-24">
        
        <div class="w-full lg:w-11/12 lg:mr-1/12">
        
            <h2 class="text-lg sm:text-xl xl:text-2xl xl:leading-snug font-title font-bold text-brand-dark text-left mb-4 lg:mb-6">Upcoming <?php the_title() ; ?></h2>    

            <div class="w-full">
                <?php

                global $post;
                $post_slug = $post->post_name;
                $cat_bg_colour = '';

                $cat = 'sunday-morning';
                
                if ( $post_slug == 'sunday-morning-service' ) {
                    $cat = 'sunday-morning';
                    $cat_bg_colour = 'main';
                } elseif ($post_slug == 'sunday-evening-service') {
                    $cat = 'sunday-evening';
                    $cat_bg_colour = 'dark';
                } elseif ($post_slug == 'friday-evening-programs') {
                    $cat = 'friday-program';
                    $cat_bg_colour = 'accent';
                } elseif ($post_slug == 'workshops') {
                    $cat = 'workshop';
                    $cat_bg_colour = 'neutral';
                } else {
                    $cat = '';
                    $cat_bg_colour = 'black';
                }


                // Find current date time.
                date_default_timezone_set('America/Vancouver');
                
                $date_now = date('Y-m-d H:i:s', strtotime( $d . "0 days")); // the date is removed 24hrs after it ends
                $date_now_w_end_date_offset = date('Y-m-d H:i:s', strtotime( $d . " -1 days")); // the date is removed 24hrs after it ends

                
                $time_now = strtotime($date_now);
                $time_now_w_offset = strtotime($date_now_w_end_date_offset);

                // Find date time in 60 days.
                $time_next_week = strtotime('+60 day', $time_now_w_offset);
                $date_next_week = date('Y-m-d H:i:s', $time_next_week);

                $args = array( 
                    'posts_per_page'    => -1,
                    'post_type'         => 'event',
                    'tax_query'         => array(
                        array(
                            'taxonomy'  => 'category',
                            'field'     => 'slug',
                            'terms'     => $cat,
                        )
                    ),
                    'order'             => 'ASC',
                    'orderby'           => 'meta_value',
                    'meta_key'          => 'start_date',
                    'meta_type'         => 'DATETIME'
                );

                $the_query = new WP_Query( $args );

                if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <div class="w-full flex flex-row bg-white text-brand-black hover:text-brand-black rounded no-underline mb-16 shadow-2xl shadow-brand-main event-hover-effect event-hover-effect-no-opacity">

                        <div class="w-full md:w-1/4 relative z-0 overflow-hidden flex items-center justify-center rounded-tl rounded-bl">
                            <?php
                            date_default_timezone_set('America/Vancouver');
                                $init_data = get_field( 'start_date' );
                                $end_data = get_field( 'end_date' );

                                $arr_start = explode('-', $init_data);

                                $full_date = $arr_start[0] . ", " . date('F d | g:i a', strtotime($init_data));
                                $full_date_end = date('F d | g:i a', strtotime($end_data));

                                $button = 'button main mt-3 md:mt-6 mb-2';
                                $button_highlighted = 'button accent mt-3 md:mt-6 mb-2';
                            ?>
                            <div class="absolute top-4 right-4 w-20 h-20 p-2 bg-brand-<?php echo $cat_bg_colour;?> text-white font-button uppercase rounded">
                                <span class="block text-2xl tracking-wide w-full text-center"><?php echo $arr_start[1]; ?></span>
                                <span class="block text-4xl tracking-wide w-full text-center -mt-1"><?php echo $arr_start[2]; ?></span>
                            </div>

                            <?php $event_image = get_field( 'event_image' ); ?>
                            <?php if ( $event_image ) : ?>
                                <img class="w-full h-80 object-cover rounded-tl rounded-bl -z-1 duration-500 transition-all transform scale-100" src="<?php echo esc_url( $event_image['url'] ); ?>" alt="<?php echo esc_attr( $event_image['alt'] ); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="w-full md:w-3/4">                                
                            <div class="flex flex-col w-full h-full p-4 lg:px-8 lg:py-6">
                                <p class="font-semibold text-xl lg:text-3xl text-brand-dark mb-1 lg:mb-2"><?php the_title() ; ?></p>                                
                                <p class="font-semibold text-base lg:text-xl text-brand-main"><?php echo $full_date; ?></p>
                                <p class="text-sm lg:text-base text-brand-accent mb-1 lg:mb-2"><?php the_field( 'location' ); ?></p>
                                <p class="text-sm lg:text-base text-brand-black"><?php the_field( 'event_description' ); ?></p>
                                <div class="flex flex-row">
                                    <div class="flex flex-row mr-0 lg:mr-4">
                                        <a class="<?php echo $button; ?>" href="<?php the_permalink(); ?>">Learn More</a>
                                    </div>
                                    <div class="flex flex-row mr-0 lg:mr-4">
                                        <a class="<?php echo $button; ?>" href="<?php the_field( 'zoom_registration_link' ); ?>">Register Now</a>
                                    </div>                               
                                    <div class="flex flex-row mr-0 lg:mr-4">
                                        <a class="<?php echo $button_highlighted; ?>" href="<?php the_field( 'zoom_registration_link' ); ?>">Join Now</a>
                                    </div>
                                   <?php echo $date_now_w_end_date_offset ; ?><br>
                                    <?php echo $date_now ; ?><br>
                                    <?php echo $time_now ; ?> <br>
<?php 
                $e_start = explode('| ', $full_date);;
                $e_end = explode('| ', $full_date_end);
                // $e_end = strtotime($date_now);
                echo $e_start[1];
                echo $e_end[1];
 ?>

                                    
                                </div>
                            </div>
                        </div>

                    </div>


                <?php endwhile; endif;

                wp_reset_query(); ?>

            </div>

        </div>

    </div>

</section>

