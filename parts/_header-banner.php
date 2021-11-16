<section>
    <div class="contained flex flex-col relative overflow-hidden items-center justify-center object-reveal-long">			
        <?php $header_image_title = get_the_title();
        if(has_post_thumbnail()) :  // If feature image has been set use it. Will override the custom theme header image.
            $header_image_src = get_the_post_thumbnail_url();
            $header_image_html ="<img width='1440' height='480' src='" . $header_image_src . "' alt='" . $header_image_title . "' class='w-full mt-8 lg:mt-16'>";
            elseif(!has_post_thumbnail() && has_custom_header()) : // If no featured image has been set use the custom theme header image.
                $header_image_src = get_header_image();
                $header_image_html ="<img width='1440' height='480' src='" . $header_image_src . "' alt='" . $header_image_title . "' class='max-w-none w-full h-auto mt-8 lg:mt-16'>";
            else :
                $header_image_html = ""; // if no featured image and no custom theme header image have been set, then display nothing.
            endif; 
        print "$header_image_html"; ?>
    </div>
</section>