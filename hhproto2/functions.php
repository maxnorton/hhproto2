<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}

// register theme widgets
require_once (get_template_directory() . "/widgets/recent-posts.php");


// Delist the default WordPress widgets replaced by custom theme widgets
add_action('widgets_init', 'hhproto2_unregister_default_widgets', 11);
 
function hhproto2_unregister_default_widgets() {
	unregister_widget('WP_Widget_Recent_Comments');
}
?>