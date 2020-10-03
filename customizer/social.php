<?php

/**
 * @package Brainiac
 * @subpackage Social Theme Customizations
 * @author Mauko < mauko@osen.co.ke >
 * @since 0.1.0
 */

add_action('customize_register', 'os_customizer_social_settings');
function os_customizer_social_settings($wp_customize)
{
	$wp_customize->add_section(
		'os_social',
		array(
			'panel'		 => 'os_options',
			'title'      => 'Social Links',
			'priority'   => 20
		)
	);

	$wp_customize->add_setting(
		'os_facebook',
		array(
			'default'     => 'https://www.facebook.com/',
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		'os_facebook',
		array(
			'label' 		=> 'Facebook Page',
			'section' 		=> 'os_social',
			'settings' 		=> 'os_facebook',
			'type' 			=> 'text',
			'description' 	=> __('Link to Facebook page'),
			'input_attrs'	=> array(
				'name' 		=> 'os_facebook'
			)
		)
	);

	$wp_customize->add_setting(
		'os_linkedin',
		array(
			'default'     => 'https://www.linkedin.com/',
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		'os_linkedin',
		array(
			'label' 		=> 'LinkedIn Page',
			'section' 		=> 'os_social',
			'settings' 		=> 'os_linkedin',
			'type' 			=> 'text',
			'description' 	=> __('Link to linkedin page'),
			'input_attrs' 	=> array(
				'name' 		=> 'os_linkedin'
			)
		)
	);

	$wp_customize->add_setting(
		'os_twitter',
		array(
			'default'     => 'https://www.twitter.com/',
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		'os_twitter',
		array(
			'label' 		=> 'Twitter Page',
			'section' 		=> 'os_social',
			'settings' 		=> 'os_twitter',
			'type' 			=> 'text',
			'description' 	=> __('Link to twitter page'),
			'input_attrs' 	=> array(
				'name' 		=> 'os_twitter'
			)
		)
	);

	$wp_customize->add_setting(
		'os_youtube',
		array(
			'default'     => 'https://www.youtube.com/',
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		'os_youtube',
		array(
			'label' 		=> 'YouTube Page',
			'section' 		=> 'os_social',
			'settings' 		=> 'os_youtube',
			'type' 			=> 'text',
			'description' 	=> __('Link to YouTube page'),
			'input_attrs' 	=> array(
				'name' 		=> 'os_youtube'
			)
		)
	);

	$wp_customize->add_setting(
		'os_whatsapp',
		array(
			'default'     => '+254705459494',
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		'os_whatsapp',
		array(
			'label' 		=> 'WhatsApp Number',
			'section' 		=> 'os_social',
			'settings' 		=> 'os_whatsapp',
			'type' 			=> 'text',
			'description' 	=> __('WhatsApp Phone Number'),
			'input_attrs' 	=> array(
				'name' 		=> 'os_whatsapp'
			)
		)
	);
}
