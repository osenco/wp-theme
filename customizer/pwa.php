<?php
/**
 * @package Brainiac
 * @subpackage PWA Theme Customizations
 * @author Osen Concepts < hi@osen.co.ke >
 * @since 0.1.0
 */

add_action( 'customize_register', 'os_customizer_pwa_settings' );
function os_customizer_pwa_settings( $wp_customize )
{
	$wp_customize->add_section(
		'os_manifest',
		array(
			'panel'		 => 'os_options',
			'title'      => 'PWA Manifest',
			'priority'   => 20
		)
	);

	$wp_customize->add_setting(
		'os_manifest_name',
		array(
			'default'     => get_bloginfo( 'name' ),
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		'os_manifest_name',
		array(
			'label' 		=> 'App Name',
			'section' 		=> 'os_manifest',
			'settings' 		=> 'os_manifest_name',
			'type' 			=> 'text',
	  		'description' 	=> __( 'Application Name In Install Prompt' ),
			'input_attrs'	=> array(
				'name' 		=> 'os_manifest_name'
			)
		)
	);

	$wp_customize->add_setting(
		'os_manifest_short_name',
		array(
			'default'     => get_bloginfo( 'name' ),
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(                           
		'os_manifest_short_name',
		array(
			'label' 		=> 'Short Name',
			'section' 		=> 'os_manifest',
			'settings' 		=> 'os_manifest_short_name',
			'type' 			=> 'text',
	  		'description' 	=> __( 'Application Name In App Launcher' ),
			'input_attrs' 	=> array(
				'name' 		=> 'os_manifest_short_name'
			)
		)
	);

	$wp_customize->add_setting(
		'os_manifest_description',
		array(
			'default'     => get_bloginfo( 'description' ),
			'transport'   => 'refresh'
		)
	);

	$wp_customize->add_control(
		'os_manifest_description',
		array(
			'label' 		=> 'Description',
			'section' 		=> 'os_manifest',
			'settings' 		=> 'os_manifest_description',
			'name' 			=> 'os_manifest_description',
			'type' 			=> 'text',
	  		'description' 	=> __( 'Application Description' ),
			'input_attrs' 	=> array(
				'name' 		=> 'os_manifest_description'
			)
		)
	);

	$wp_customize->add_setting(
		'os_manifest_language' ,
		array(
			'default'     => get_bloginfo( 'language' ),
			'transport'   => 'refresh',
		)
	);

	$wp_customize->add_control(
		'os_manifest_language',
		array(
			'label' 		=> 'Language',
			'section' 		=> 'os_manifest',
			'settings' 		=> 'os_manifest_language',
			'name' 			=> 'os_manifest_language',
			'type' 			=> 'text',
	  		'description' 	=> __( 'Application Language' ),
			'input_attrs' 	=> array(
				'name' 		=> 'os_manifest_language'
			)
		)
	);

	$wp_customize->add_setting(
		'os_manifest_display',
		array(
		  'default' => 'standalone'
		)
	);

	$wp_customize->add_control(
		'os_manifest_display',
		array(
			'label' 			=> __( 'Display' ),
			'section' 			=> 'os_manifest',
			'type' 				=> 'select',
			'description' 		=> __( 'App display for users' ),
			'choices' 			=> array(
				'fullscreen' 	=>	__( 'Full Screen' ),
				'standalone' 	=>	__( 'Stand Alone' ),
				'minimal-ui' 	=>	__( 'Minimal UI' ),
				'browser' 		=>	__( 'Standard Browser' )
			),
			'input_attrs' 		=> array(
				'name' 			=> 'os_manifest_display'
			)
		)
	);

	$wp_customize->add_setting(
		'os_manifest_orientation',
		array(
		  'default' => 'portrait'
		)
	);

	$wp_customize->add_control(
		'os_manifest_orientation',
		array(
			'label' 			=> __( 'Orientation' ),
			'section' 			=> 'os_manifest',
			'type' 				=> 'select',
			'description' 		=> __( 'Screen Orientation' ),
			'choices' 			=> array(
				'portrait'		=>	__( 'Portrait' ),
				'landscape'		=>	__( 'Landscape' )
			),
			'input_attrs' 		=> array(
				'name' 			=> 'os_manifest_orientation'
			)
		)
	);

	$wp_customize->add_setting(
		'os_manifest_color',
		array(
		  'default' => '#ffffff'
		)
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'os_manifest_color', 
	        array(
	        	'label' 		=> 'App Color',
	        	'section' => 'os_manifest',
	        	'settings' => 'os_manifest_color'
	        )
	    )
	);

	$wp_customize->add_setting(
		'os_manifest_background_color',
		array(
		  'default' => '#000000'
		)
	);

	$wp_customize->add_control(
	    new WP_Customize_Color_Control(
	        $wp_customize,
	        'os_manifest_background_color', 
	        array(
	        	'label' 		=> 'App Background Color',
	        	'section' => 'os_manifest',
	        	'settings' => 'os_manifest_background_color'
	        )
	    )
	);

	
}