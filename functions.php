<?php

// All Theme Support




// Add Style Sheet Or JS

function my_all_js_css_add(){
    wp_enqueue_style( 'salemStyle', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'my_all_js_css_add');