<?php

namespace Roots\Sage\Customizer;

use Roots\Sage\Assets;

/**
 * Add postMessage support
 */
function customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';

	$wp_customize->add_setting( 'site_logo' ); // Add setting for logo uploader

	// Add control for logo uploader (actual uploader)
	$wp_customize->add_control( new \WP_Customize_Image_Control( $wp_customize, 'site_logo', array(
		'label'    => __( 'Upload Logo (replaces text)', 'devanagari' ),
		'section'  => 'title_tagline',
		'settings' => 'site_logo',
	) ) );
}
add_action( 'customize_register', __NAMESPACE__ . '\\customize_register' );

/**
 * Customizer JS
 */
function customize_preview_js() {
	wp_enqueue_script( 'sage/customizer', Assets\asset_path( 'scripts/customizer.js' ), [ 'customize-preview' ], null, true );
}
add_action( 'customize_preview_init', __NAMESPACE__ . '\\customize_preview_js' );
