<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package Skincues Lite
 * @since 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since 0.1
	 *
	 * @return void
	 */
	function skincues_lite_register_block_styles() {

		//Wp Block Group Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'padding-0',
				'label' => esc_html__( 'No Padding', 'skincues-lite' ),
			)
		);

		//Wp Block Columns Gap Zero
		register_block_style(
			'core/columns',
			array(
				'name'  => 'have-gap-0',
				'label' => esc_html__( 'Gap Zero', 'skincues-lite' ),
			)
		);

		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'button',
				'label'        => esc_html__( 'Plain', 'skincues-lite' ),
			)
		);
	}
	add_action( 'init', 'skincues_lite_register_block_styles' );
}
