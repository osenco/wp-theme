<?php

/**
 * @package Brainiac
 * @subpackage General Theme Customizations
 * @author Mauko < mauko@osen.co.ke >
 * @since 0.1.0
 */

add_action('customize_register', 'os_customizer_gen_settings');
function os_customizer_gen_settings($wp_customize)
{
	$wp_customize->add_panel(
		'os_options',
		array(
			'title'      => get_bloginfo('name') . ' Options',
			'priority'   => 20
		)
	);
}
