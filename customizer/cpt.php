<?php

/**
 * @package Brainiac
 * @subpackage Cpt Theme Customizations
 * @author Mauko < mauko@osen.co.ke >
 * @since 0.1.0
 */

function os_sanitize_checkbox($checked)
{
	// Boolean check.
	return ((isset($checked) && true == $checked) ? true : false);
}

add_action('customize_register', 'os_customizer_cpt_settings');
function os_customizer_cpt_settings($wp_customize)
{
	$wp_customize->add_section(
		'os_cpt',
		array(
			'panel'		 => 'os_options',
			'title'      => 'Custom Post Types',
			'priority'   => 20
		)
	);

	$wp_customize->add_setting(
		'os_cpt_testimonial',
		array(
			'default'     => true,
			'transport'   => 'refresh',
			'sanitize_callback' => 'os_sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'os_cpt_testimonial',
		array(
			'label' 		=> 'Use Testimonials',
			'section' 		=> 'os_cpt',
			'settings' 		=> 'os_cpt_testimonial',
			'type' 			=> 'checkbox',
			'description' 	=> __('Show Testimonial Menu'),
			'input_attrs'	=> array(
				'name' 		=> 'os_cpt_testimonial'
			)
		)
	);

	$wp_customize->add_setting(
		'os_cpt_question',
		array(
			'default'     => true,
			'transport'   => 'refresh',
			'sanitize_callback' => 'os_sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'os_cpt_question',
		array(
			'label' 		=> 'Use Questions',
			'section' 		=> 'os_cpt',
			'settings' 		=> 'os_cpt_question',
			'type' 			=> 'checkbox',
			'description' 	=> __('Show Question Menu'),
			'input_attrs'	=> array(
				'name' 		=> 'os_cpt_question'
			)
		)
	);

	$wp_customize->add_setting(
		'os_cpt_service',
		array(
			'default'     => true,
			'transport'   => 'refresh',
			'sanitize_callback' => 'os_sanitize_checkbox'
		)
	);

	$wp_customize->add_control(
		'os_cpt_service',
		array(
			'label' 		=> 'Use Services',
			'section' 		=> 'os_cpt',
			'settings' 		=> 'os_cpt_service',
			'type' 			=> 'checkbox',
			'description' 	=> __('Show Service Menu'),
			'input_attrs'	=> array(
				'name' 		=> 'os_cpt_service'
			)
		)
	);
}
