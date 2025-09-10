<?php
function cosmicenergy_enqueue_scripts() {
    wp_enqueue_style('lumivista-css', get_template_directory_uri() . '/assets/css/lumivista.css', array(), '1.0');
    wp_enqueue_script('lumivista-js', get_template_directory_uri() . '/assets/js/lumivista.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'cosmicenergy_enqueue_scripts');
?>
