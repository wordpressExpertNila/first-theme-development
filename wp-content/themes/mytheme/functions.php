<?php 

function our_theme_setup(){
// menu register
register_nav_menus(array(
    'primary'=>__('Primary Menu'),
    'footer'=>__('Footer Menu'),
));
// feature img
add_theme_support('post-thumbnails');
}add_action('after_setup_theme', 'our_theme_setup');

// stylesheet
function alpha_stylesheet(){
    wp_enqueue_style('style', get_stylesheet_uri(),'','1.0' );

}add_action('wp_enqueue_scripts', 'alpha_stylesheet');



// sidebar register
function our_widget()
{
   register_sidebar();
}
add_action('widgets_init','our_widget' );

/**
 * Fires after all default WordPress widgets have been registered.
 *
 */
function action_widgets_init() : void {
}
add_action('after_setup_theme')
















