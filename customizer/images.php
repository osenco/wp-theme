<?php

/**
 * @package Brainiac
 * @subpackage Images Theme Customizations
 * @author Mauko < mauko@osen.co.ke >
 * @since 0.1.0
 */

add_action('customize_register', 'os_customizer_images_settings');
function os_customizer_images_settings($wp_customize)
{
	$wp_customize->add_section(
		'os_images',
		array(
			'panel'		 => 'os_options',
			'title'      => 'Images & Icons',
			'priority'   => 20
		)
	);

	$wp_customize->add_setting(
		'os_light_logo',
		array(
			'default'		=> get_stylesheet_directory_uri() . '/assets/img/blog/1.jpg',
			'sanitize_callback'	=> 'esc_url_raw',
			'transport'		=> 'postMessage'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'os_light_logo',
			array(
				'settings'		=> 'os_light_logo',
				'section'		=> 'os_images',
				'label'			=> __('Light Logo', 'intrinsic'),
				'description'	=> __('Select the image to use as light logo', 'intrinsic')
			)
		)
	);

	$wp_customize->add_setting(
		'os_about_image',
		array(
			'default'		=> get_stylesheet_directory_uri() . '/assets/img/blog/2.jpg',
			'sanitize_callback'	=> 'esc_url_raw',
			'transport'		=> 'postMessage'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'os_about_image',
			array(
				'settings'		=> 'os_about_image',
				'section'		=> 'os_images',
				'label'			=> __('About Us Image', 'intrinsic'),
				'description'	=> __('Select the image to be used for the about us section.', 'intrinsic')
			)
		)
	);



	$wp_customize->add_setting(
		'os_mission_image',
		array(
			'default'		=> get_stylesheet_directory_uri() . '/assets/img/blog/3.jpg',
			'sanitize_callback'	=> 'esc_url_raw',
			'transport'		=> 'postMessage'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'os_mission_image',
			array(
				'settings'		=> 'os_mission_image',
				'section'		=> 'os_images',
				'label'			=> __('More About Us Image', 'intrinsic'),
				'description'	=> __('Select the image to be used for the more about us section.', 'intrinsic')
			)
		)
	);

	$wp_customize->add_setting(
		'os_contact_image',
		array(
			'default'		=> get_stylesheet_directory_uri() . '/assets/img/blog/4.jpg',
			'sanitize_callback'	=> 'esc_url_raw',
			'transport'		=> 'postMessage'
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'os_contact_image',
			array(
				'settings'		=> 'os_contact_image',
				'section'		=> 'os_images',
				'label'			=> __('Contact Image', 'intrinsic'),
				'description'	=> __('Select the image to be used for the contact section.', 'intrinsic')
			)
		)
	);
}