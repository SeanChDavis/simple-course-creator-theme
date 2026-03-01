<?php
/**
 * Functions pertaining to the block editor
 */

/**
 * Add editor styles
 *
 * @return void
 */
function scct_editor_styles() {

	add_editor_style();
	wp_enqueue_style( 'scct-editor-styles', get_theme_file_uri( 'editor-styles.css' ), false, THEME_VERSION, 'all' );

	// Make sure the custom colors are added to the editor
	$custom_colors = '
        :root {
            --body: ' . get_theme_mod( 'body_color', '#002959' ) . ';
            --subdued-body: ' . get_theme_mod( 'subdued_body_color', '#315b82' ) . ';
            --lightest: ' . get_theme_mod( 'lightest_color', '#f7f9fc' ) . ';
            --darkest: ' . get_theme_mod( 'darkest_color', '#002754' ) . ';
            --action: ' . get_theme_mod( 'action_color', '#00bca9' ) . ';
            --subdued-action: ' . get_theme_mod( 'subdued_action_color', '#002754' ) . ';
        }';

	wp_add_inline_style( 'scct-editor-styles', $custom_colors );
}
add_action( 'enqueue_block_editor_assets', 'scct_editor_styles' );


/**
 * Adjust editor styles
 *
 * @param $colors
 * @return mixed
 */
function scct_editor_color_palette() {

	$scct_colors = array(
		array(
			'name'  => __( 'White', 'scct' ),
			'slug'  => 'white',
			'color' => '#fff',
		),
		array(
			'name'  => __( 'Body Text', 'scct' ),
			'slug'  => 'body',
			'color' => get_theme_mod( 'body_color', '#002959' ),
		),
		array(
			'name'  => __( 'Body Text - Subdued', 'scct' ),
			'slug'  => 'subdued-body',
			'color' => get_theme_mod( 'subdued_body_color', '#315b82' ),
		),
		array(
			'name'  => __( 'The Lightest Color', 'scct' ),
			'slug'  => 'the-lightest',
			'color' => get_theme_mod( 'lightest_color', '#f7f9fc' ),
		),
		array(
			'name'  => __( 'The Darkest Color', 'scct' ),
			'slug'  => 'the-darkest',
			'color' => get_theme_mod( 'darkest_color', '#002754' ),
		),
		array(
			'name'  => __( 'Action', 'scct' ),
			'slug'  => 'action',
			'color' => get_theme_mod( 'action_color', '#00bca9' ),
		),
		array(
			'name'  => __( 'Translucent Background - Light', 'scct' ),
			'slug'  => 'translucent-light',
			'color' => 'rgba(255,255,255,0.1)',
		),
		array(
			'name'  => __( 'Translucent Background - Dark', 'scct' ),
			'slug'  => 'translucent-dark',
			'color' => 'rgba(0,0,0,0.1)',
		),
	);

	add_theme_support( 'editor-color-palette', $scct_colors );
}
add_action( 'after_setup_theme', 'scct_editor_color_palette' );