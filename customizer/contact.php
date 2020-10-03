<?php
/**
 * @package Brainiac
 * @subpackage Contact Theme Customizations
 * @author Mauko < mauko@osen.co.ke >
 * @since 0.1.0
 */

add_action( 'customize_register', 'os_customizer_contact_settings' );
function os_customizer_contact_settings( $wp_customize ) 
{
	$wp_customize->add_section( 
		'os_contact', 
		array(
			'panel'		 => 'os_options',
			'title'      => 'Contact and hours',
			'priority'   => 20
		) 
	);

	$wp_customize->add_setting( 
		'os_address_1', 
		array(
			'default'     => 'Westlands',
			'transport'   => 'refresh'
		) 
	);

	$wp_customize->add_control( 
		'os_address_1', 
		array(
			'label' 		=> 'Address (Location)',
			'section' 		=> 'os_contact',
			'settings' 		=> 'os_address_1',
			'type' 			=> 'text',
	  		'description' 	=> __( 'Line 1' ),
			'input_attrs'	=> array(
				'name' 		=> 'os_address_1'
			)
		) 
	);

	$wp_customize->add_setting( 
		'os_address_2', 
		array(
			'default'     => 'Nairobi, Kenya',
			'transport'   => 'refresh'
		) 
	);

	$wp_customize->add_control( 
		'os_address_2', 
		array(
			'label' 		=> 'Address (PO Box)',
			'section' 		=> 'os_contact',
			'settings' 		=> 'os_address_2',
			'type' 			=> 'text',
	  		'description' 	=> __( 'Line 2' ),
			'input_attrs'	=> array(
				'name' 		=> 'os_address_2'
			)
		) 
	);

	$wp_customize->add_setting( 
		'os_phone', 
		array(
			'default'     => '+254 20 440 4993',
			'transport'   => 'refresh'
		) 
	);

	$wp_customize->add_control( 
		'os_phone', 
		array(
			'label' 		=> 'Phone Number',
			'section' 		=> 'os_contact',
			'settings' 		=> 'os_phone',
			'type' 			=> 'tel',
	  		'description' 	=> __( 'Phone' ),
			'input_attrs' 	=> array(
				'name' 		=> 'os_phone'
			)
		) 
	);

	$wp_customize->add_setting( 
		'os_email', 
		array(
			'default'     => 'hi@osen.co.ke',
			'transport'   => 'refresh'
		) 
	);

	$wp_customize->add_control( 
		'os_email', 
		array(
			'label' 		=> 'Email Address',
			'section' 		=> 'os_contact',
			'settings' 		=> 'os_email',
			'type' 			=> 'email',
	  		'description' 	=> __( 'Email' ),
			'input_attrs' 	=> array(
				'name' 		=> 'os_email'
			)
		) 
	);

	$wp_customize->add_setting( 
		'os_hours', 
		array(
			'default'     => 'Open Monday to Friday 8am to 5pm',
			'transport'   => 'refresh'
		) 
	);

	$wp_customize->add_control( 
		'os_hours', 
		array(
			'label' 		=> 'Working hours',
			'section' 		=> 'os_contact',
			'settings' 		=> 'os_hours',
			'type' 			=> 'text',
	  		'description' 	=> __( 'Hours' ),
			'input_attrs' 	=> array(
				'name' 		=> 'os_hours'
			)
		) 
	);
}