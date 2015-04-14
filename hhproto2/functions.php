<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
 
function hhproto2_unregister_default_widgets() {
	unregister_widget('WP_Widget_Recent_Comments');
}

// Delist the default WordPress widgets replaced by custom theme widgets
add_action('widgets_init', 'hhproto2_unregister_default_widgets');

// register theme widgets
require_once (get_stylesheet_directory() . "/widgets/recent-posts.php");

/* Custom title function
function hemingway_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'hemingway' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'hemingway_wp_title', 10, 2 );*/

// Disable Hemingway title filter
remove_filter( 'wp_title', 'hemingway_wp_title', 10, 2);

?>