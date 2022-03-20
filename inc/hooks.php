<?php
/**
 * Custom hooks
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

remove_action( 'understrap_site_info', "understrap_add_site_info");

if ( ! function_exists( 'perfect_onderwijs_match_site_info' ) ) {
	/**
	 * Add site info hook to WP hook library.
	 */
	function perfect_onderwijs_match_site_info() {
		do_action( 'perfect_onderwijs_match_site_info' );
	}
}

add_action( 'perfect_onderwijs_match_site_info', 'perfect_onderwijs_match_add_site_info' );
if ( ! function_exists( 'perfect_onderwijs_match_add_site_info' ) ) {
	/**
	 * Add site info content.
	 */
	function perfect_onderwijs_match_add_site_info() {
		$the_theme = wp_get_theme();
		$copyYear = 2022;
		$currentYear = date('Y');
		$url = esc_url(get_site_url());
		$name = get_bloginfo( 'name' );

		if ( $copyYear == $currentYear ) {
			$site_info = sprintf( '<a href="%s">©%s %s</a>', 
			$url, $currentYear, $name, );
		} else {
			$site_info = sprintf( '<a href="%s">©%s-%s %s</a>', 
			$url, $copyYear, $currentYear, $name, );
		}



		// Check if customizer site info has value.
		if ( get_theme_mod( 'understrap_site_info_override' ) ) {
			$site_info = get_theme_mod( 'understrap_site_info_override' );
		}
		echo apply_filters( 'perfect_onderwijs_match_site_info_content', $site_info ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
}