<?php
/**
 * ctoi functions and definitions.
 *
 * @package ctoi
 */

defined( 'ABSPATH' ) || exit;

add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );

function ctoi_enqueue_styles() {
	$suffix = SCRIPT_DEBUG ? '' : '.min';
	wp_enqueue_style(
		'ctoi-style',
		get_parent_theme_file_uri( 'style' . $suffix . '.css' ),
		array(),
		wp_get_theme()->get( 'Version' )
	);
	wp_enqueue_style(
		'ctoi-portal',
		get_parent_theme_file_uri( 'assets/css/portal.css' ),
		array( 'ctoi-style' ),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'ctoi_enqueue_styles' );

function ctoi_enqueue_fonts() {
	$url = add_query_arg(
		array( 'family' => rawurlencode( 'Inter:400,500,600,700' ), 'display' => 'swap' ),
		'https://fonts.googleapis.com/css2'
	);
	wp_enqueue_style( 'ctoi-fonts', $url, array(), null );
}
add_action( 'wp_enqueue_scripts', 'ctoi_enqueue_fonts', 5 );

function ctoi_font_preconnect() {
	echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
	echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
}
add_action( 'wp_head', 'ctoi_font_preconnect', 1 );

add_editor_style( 'assets/css/editor-style.css' );

function ctoi_pattern_categories() {
	register_block_pattern_category( 'ctoi', array(
		'label'       => __( 'ctoi Portal', 'ctoi' ),
		'description' => __( 'Portal pages and layouts.', 'ctoi' ),
	) );
}
add_action( 'init', 'ctoi_pattern_categories' );

function ctoi_block_styles() {
	register_block_style( 'core/button', array(
		'name'  => 'outline',
		'label' => __( 'Outline', 'ctoi' ),
		'inline_style' => '.wp-block-button.is-style-outline .wp-block-button__link { background: transparent !important; color: var(--ctoi-primary, #1A73E8) !important; border: 1px solid var(--ctoi-primary, #1A73E8); } .wp-block-button.is-style-outline .wp-block-button__link:hover { background: rgba(26,115,232,0.08) !important; }',
	) );
}
add_action( 'init', 'ctoi_block_styles' );

function ctoi_login_styles() {
	$url = add_query_arg( array( 'family' => rawurlencode( 'Inter:400,500,600' ), 'display' => 'swap' ), 'https://fonts.googleapis.com/css2' );
	wp_enqueue_style( 'ctoi-login-fonts', $url, array(), null );
	wp_enqueue_style( 'ctoi-portal', get_parent_theme_file_uri( 'assets/css/portal.css' ), array( 'login' ), wp_get_theme()->get( 'Version' ) );
}
add_action( 'login_enqueue_scripts', 'ctoi_login_styles', 20 );

add_filter( 'login_headerurl', function() { return home_url( '/' ); } );
add_filter( 'login_headertext', function() { return get_bloginfo( 'name' ); } );

function ctoi_body_class( $classes ) {
	$classes[] = 'ctoi-portal';
	return $classes;
}
add_filter( 'body_class', 'ctoi_body_class' );
