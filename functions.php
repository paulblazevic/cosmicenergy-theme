<?php
function cosmicenergy_enqueue_scripts() {
    wp_enqueue_style('cosmic-style', get_template_directory_uri() . '/assets/css/cosmic.css', array(), '1.0', 'all');
    wp_enqueue_script('cosmic-js', get_template_directory_uri() . '/assets/js/cosmic.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'cosmicenergy_enqueue_scripts');
?>
