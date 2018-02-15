<?php
/**
 * Agus Priyanto functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Agus_Priyanto
 */

/**
 * Theme config & functions
 */
require get_template_directory() . '/inc/agp_theme-supports.php';
require get_template_directory() . '/inc/agp_register-widgets.php';
require get_template_directory() . '/inc/agp_enqueue-scripts.php';
require get_template_directory() . '/inc/agp_custom-header.php';
require get_template_directory() . '/inc/agp_template-tags.php';
require get_template_directory() . '/inc/agp_template-functions.php';
require get_template_directory() . '/inc/agp_customizer.php';

/**
 * Libraries
 */
#require get_template_directory() . '/inc/lib/minify/Minify.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
