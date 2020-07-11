<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */

add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );

add_filter('wp_default_editor', create_function('', 'return "html";'));

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'news_posts',
		'before_widget' => '<div class="item">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
	
	register_sidebar(array(
		'name' => 'footer_1',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
	register_sidebar(array(
		'name' => 'sponsors',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	));
	
	register_sidebar(array(
		'name' => 'mailchimp',
		'before_widget' => '<div class="mailchimp">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));

register_post_type('seperator', array(
	'label' => __('Header boxes'),
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => true,
	'query_var' => false,
	'supports' => array('title', 'editor', 'author', 'thumbnail', 'page-attributes')
));

register_post_type('hidden', array(
	'label' => __('Hidden pages'),
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => true,
	'query_var' => false,
	'supports' => array('title', 'editor', 'author', 'thumbnail', 'page-attributes', 'custom-fields')
));


add_action( 'init', 'register_my_menu' );

function register_my_menu() {
	register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
}

function custom_excerpt_more($more) {
return '...<a href="'. get_permalink() . '">Continue reading</a>';
}
add_filter('excerpt_more', 'custom_excerpt_more');

function new_excerpt_length($length) {
return 40;
}
add_filter('excerpt_length', 'new_excerpt_length');

?>
