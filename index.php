<?php get_header(); ?>

<main>
    <?php get_template_part('template-parts/hero'); ?>

    <section>
        <h2>Welcome to CosmicEnergy</h2>
        <p>Feel the cosmic vibes throughout your website!</p>
    </section>

    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_title('<h3>','</h3>');
            the_content();
        endwhile;
    endif;
    ?>
</main>

<?php get_footer(); ?>
