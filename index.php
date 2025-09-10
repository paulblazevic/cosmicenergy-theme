<?php get_template_part('template-parts/header'); ?>
<?php get_template_part('template-parts/hero'); ?>

<main id="primary" class="site-main">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    else :
        echo "<p>No content found</p>";
    endif;
    ?>
</main>

<?php get_template_part('template-parts/footer'); ?>
