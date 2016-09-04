<?php

/**
 * WD Modifications:
 * - Featured image slider is no longer full screen.  More banner like, 300 pixels tall in desktop version.
 * - Use H3 in widgets instead of H1 for better SEO results
 * - JavaScript file added for more options
 * - Green changed to blue
 * - Removed "Powered By WordPress" from footer
 * - etc.
 *
 * @since Twenty Fourteen 1.0
 */
function remove_business_starter_widgets(){

	unregister_sidebar( 'sidebar-1' );
	unregister_sidebar( 'sidebar-2' );
	unregister_sidebar( 'sidebar-3' );
}
add_action( 'widgets_init', 'remove_business_starter_widgets', 11 );

function business_starter_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'business_starter' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Main sidebar that appears on the left.', 'business_starter' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Content Sidebar', 'business_starter' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Additional sidebar that appears on the right.', 'business_starter' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area', 'business_starter' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears in the footer section of the site.', 'business_starter' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}

remove_action( 'widgets_init', 'business_starter_widgets_init', 11 );
add_action( 'widgets_init', 'business_starter_widgets_init', 11 );


//enqueue script
function business_starter_scripts() {
	wp_enqueue_script( 'business-starter-script', get_stylesheet_directory_uri() . '/js/functions.js', array( 'jquery' ), '' , true );
}
add_action( 'wp_enqueue_scripts' , 'business_starter_scripts' , 999 );
