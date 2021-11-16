<section id="about" class="">
    <div class="contained items-start lg:items-center pt-12 lg:pt-24">

        <div class="flex flex-col relative items-start lg:items-center mb-8 lg:mb-12">
            <h2 class="text-2xl lg:text-3xl 2xl:text-4xl font-title object-reveal-short"><?php the_sub_field( 'section_title' ); ?></h2>
            <div class="absolute -bottom-3 bg-brand-main w-12 h-1 object-reveal-long"></div>
        </div>

        <div class="font-sans text-base lg:text-lg 2xl:text-xl w-full lg:w-3/4 object-reveal-long">
            <?php the_sub_field( 'section_content' ); ?>
        </div>
        
    </div>
</section>