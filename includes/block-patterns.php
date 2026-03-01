<?php

/**
 * Register block pattern category.
 *
 * @return void
 */
function scct_register_block_pattern_category() {

	register_block_pattern_category(
		'scct-page-sections-elements',
		array(
			'label' => __( 'SCCT Page Sections & Elements', 'scct' )
		)
	);
}
add_action( 'init', 'scct_register_block_pattern_category' );
