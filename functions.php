<?php

//includes 
require get_template_directory() . '/includes/queries.php';

// image support
function bookreviews_setup()
{
    // featured images
    add_theme_support("post-thumbnails");

    //seo for titles
    add_theme_support("title-tag");
}
add_action("after_setup_theme", "bookreviews_setup");

// adding a main menu
function bookreviews_menus() {
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'bookreviews'),
    ));
}
add_action('init', 'bookreviews_menus');


// Adding the style and Js files
function bookreviews_scripts_style() {
    //CSS
    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', '8.0.1');
    wp_enqueue_style("style", get_stylesheet_uri(), array("normalize"), "1.0.0");


    //JS
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'bookreviews_scripts_style');