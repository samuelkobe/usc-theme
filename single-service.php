<?php get_header(); ?>

<main role="main">
    
    <?php get_template_part('parts/_page-hero'); ?>
    
    <section class="contained my-8 xl:my-16 object-reveal-short">
        <div class="w-full lg:w-5/6 xl:w-3/4 mx-0 lg:mx-1/12 xl:ml-1/12 xl:mr-1/6">
            <h2 class="text-lg sm:text-xl xl:text-2xl xl:leading-snug font-title font-bold text-brand-dark text-left mb-4 lg:mb-6"><?php the_field( 'service_description_header' ); ?></h2>
            <p class="font-sans text-brand-black text-base lg:text-lg"><?php the_field( 'service_description_content' ); ?></p>
        </div>
    </section>
    
    <?php get_template_part('parts/_events_loop'); ?>

</main>

<?php get_footer(); ?>

