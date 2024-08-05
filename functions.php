<?php

//includes 
require get_template_directory() . '/includes/queries.php';
require get_template_directory() . '/includes/widgets.php';

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


// dynamic images
function bookreviews_hero_imagen() {
    //All of this is so that the owner, if for whatever reason he wants to change the hero's image, can.

    // getting the id from the page
    $front_id = get_option("page_on_front"); // get the info on admin/options.php a hidden panel WP

    // getting the img
    $id_imagen = get_field("hero_imagen", $front_id); // the second param is a reference of where to look
    //getting the rute
    $imagen = wp_get_attachment_image_src($id_imagen, "full")[0];
    //creating css
    wp_register_style("custom", false);
    wp_enqueue_style("custom");

    $imagen_destacada_css = "
        body.home .header {
            background-image: linear-gradient(rgb(0 0 0 / .75), rgb( 0 0 0 / .75)), url($imagen);
        }
    ";
    //inject css code
    wp_add_inline_style("custom", $imagen_destacada_css);
}
add_action('init', 'bookreviews_hero_imagen');


// BookReviews Widget
function bookreviews_widgets() {
    register_sidebar(array(
        'name'  => 'sidebar 1',
        'id'    => 'sidebar_1',
        'before_widget'  => '<div class="widget">',
        'after_widget'   => '</div>',
        'before_title'   => '<h3 class"text-center text-primary">',
        'after_title'    => '</h3>',

    ));

}