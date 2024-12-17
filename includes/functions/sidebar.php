<?php
/**
 * revos functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Revos
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function revos_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Сайдбар', 'revos' ),
			'id'            => 'sidebar-blog',
			'description'   => esc_html__( 'Add widgets here.', 'revos' ),
			'before_widget' => '<section id="%1$s" class="sidebar__widget widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="sidebar__title widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'revos_widgets_init' );