<?php
function cosmicenergy_enqueue_assets() {
    wp_enqueue_style('cosmic-style', get_template_directory_uri() . '/assets/css/cosmic.css');
    wp_enqueue_script('cosmic-js', get_template_directory_uri() . '/assets/js/cosmic.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'cosmicenergy_enqueue_assets');
?>
