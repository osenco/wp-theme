<?php

/**
 * @package  WordPress Theme
 * @subpackage  template
 * @author Osen Concepts <hi@osen.co.ke>
 * @version 0.0.1
 *
 */

namespace Osen\Theme\Wpt\Customizer;

class Options
{
    public function __construct()
    {
        add_action('customize_register', array($this, 'os_customizer_gen_settings'));
        add_action('customize_register', array($this, 'os_customizer_images_settings'));
        add_action('customize_register', array($this, 'os_customizer_contact_settings'));
        add_action('customize_register', array($this, 'os_customizer_pwa_settings'));
        add_action('customize_register', array($this, 'os_customizer_social_settings'));
    }

    public function os_customizer_gen_settings($wp_customize)
    {
        $wp_customize->add_panel(
            'os_options',
            array(
                'title'    => get_bloginfo('name') . ' Options',
                'priority' => 20,
            )
        );
    }

    public function os_customizer_images_settings($wp_customize)
    {
        $wp_customize->add_section(
            'os_images',
            array(
                'panel'    => 'os_options',
                'title'    => 'Images & Icons',
                'priority' => 20,
            )
        );

        $wp_customize->add_setting(
            'os_light_logo',
            array(
                'default'           => get_stylesheet_directory_uri() . '/assets/img/blog/1.jpg',
                'sanitize_callback' => 'esc_url_raw',
                'transport'         => 'postMessage',
            )
        );

        $wp_customize->add_control(
            new \WP_Customize_Image_Control(
                $wp_customize,
                'os_light_logo',
                array(
                    'settings'    => 'os_light_logo',
                    'section'     => 'os_images',
                    'label'       => __('Light Logo', 'osen'),
                    'description' => __('Select the image to use as light logo', 'osen'),
                )
            )
        );

        $wp_customize->add_setting(
            'os_about_image',
            array(
                'default'           => get_stylesheet_directory_uri() . '/assets/img/blog/2.jpg',
                'sanitize_callback' => 'esc_url_raw',
                'transport'         => 'postMessage',
            )
        );

        $wp_customize->add_control(
            new \WP_Customize_Image_Control(
                $wp_customize,
                'os_about_image',
                array(
                    'settings'    => 'os_about_image',
                    'section'     => 'os_images',
                    'label'       => __('About Us Image', 'osen'),
                    'description' => __('Select the image to be used for the about us section.', 'osen'),
                )
            )
        );

        $wp_customize->add_setting(
            'os_mission_image',
            array(
                'default'           => get_stylesheet_directory_uri() . '/assets/img/blog/3.jpg',
                'sanitize_callback' => 'esc_url_raw',
                'transport'         => 'postMessage',
            )
        );

        $wp_customize->add_control(
            new \WP_Customize_Image_Control(
                $wp_customize,
                'os_mission_image',
                array(
                    'settings'    => 'os_mission_image',
                    'section'     => 'os_images',
                    'label'       => __('More About Us Image', 'osen'),
                    'description' => __('Select the image to be used for the more about us section.', 'osen'),
                )
            )
        );

        $wp_customize->add_setting(
            'os_contact_image',
            array(
                'default'           => get_stylesheet_directory_uri() . '/assets/img/blog/4.jpg',
                'sanitize_callback' => 'esc_url_raw',
                'transport'         => 'postMessage',
            )
        );

        $wp_customize->add_control(
            new \WP_Customize_Image_Control(
                $wp_customize,
                'os_contact_image',
                array(
                    'settings'    => 'os_contact_image',
                    'section'     => 'os_images',
                    'label'       => __('Contact Image', 'osen'),
                    'description' => __('Select the image to be used for the contact section.', 'osen'),
                )
            )
        );
    }

    public function os_customizer_contact_settings($wp_customize)
    {
        $wp_customize->add_section(
            'os_contact',
            array(
                'panel'    => 'os_options',
                'title'    => 'Contact and hours',
                'priority' => 20,
            )
        );

        $wp_customize->add_setting(
            'os_address_1',
            array(
                'default'   => 'Westlands',
                'transport' => 'refresh',
            )
        );

        $wp_customize->add_control(
            'os_address_1',
            array(
                'label'       => 'Address (Location)',
                'section'     => 'os_contact',
                'settings'    => 'os_address_1',
                'type'        => 'text',
                'description' => __('Line 1'),
                'input_attrs' => array(
                    'name' => 'os_address_1',
                ),
            )
        );

        $wp_customize->add_setting(
            'os_address_2',
            array(
                'default'   => 'Nairobi, Kenya',
                'transport' => 'refresh',
            )
        );

        $wp_customize->add_control(
            'os_address_2',
            array(
                'label'       => 'Address (PO Box)',
                'section'     => 'os_contact',
                'settings'    => 'os_address_2',
                'type'        => 'text',
                'description' => __('Line 2'),
                'input_attrs' => array(
                    'name' => 'os_address_2',
                ),
            )
        );

        $wp_customize->add_setting(
            'os_phone',
            array(
                'default'   => '+254 20 440 4993',
                'transport' => 'refresh',
            )
        );

        $wp_customize->add_control(
            'os_phone',
            array(
                'label'       => 'Phone Number',
                'section'     => 'os_contact',
                'settings'    => 'os_phone',
                'type'        => 'tel',
                'description' => __('Phone'),
                'input_attrs' => array(
                    'name' => 'os_phone',
                ),
            )
        );

        $wp_customize->add_setting(
            'os_email',
            array(
                'default'   => 'hi@osen.co.ke',
                'transport' => 'refresh',
            )
        );

        $wp_customize->add_control(
            'os_email',
            array(
                'label'       => 'Email Address',
                'section'     => 'os_contact',
                'settings'    => 'os_email',
                'type'        => 'email',
                'description' => __('Email'),
                'input_attrs' => array(
                    'name' => 'os_email',
                ),
            )
        );

        $wp_customize->add_setting(
            'os_hours',
            array(
                'default'   => 'Open Monday to Friday 8am to 5pm',
                'transport' => 'refresh',
            )
        );

        $wp_customize->add_control(
            'os_hours',
            array(
                'label'       => 'Working hours',
                'section'     => 'os_contact',
                'settings'    => 'os_hours',
                'type'        => 'text',
                'description' => __('Hours'),
                'input_attrs' => array(
                    'name' => 'os_hours',
                ),
            )
        );
    }

    public function os_customizer_pwa_settings($wp_customize)
    {
        $wp_customize->add_section(
            'os_manifest',
            array(
                'panel'    => 'os_options',
                'title'    => 'PWA Manifest',
                'priority' => 20,
            )
        );

        $wp_customize->add_setting(
            'os_manifest_name',
            array(
                'default'   => get_bloginfo('name'),
                'transport' => 'refresh',
            )
        );

        $wp_customize->add_control(
            'os_manifest_name',
            array(
                'label'       => 'App Name',
                'section'     => 'os_manifest',
                'settings'    => 'os_manifest_name',
                'type'        => 'text',
                'description' => __('Application Name In Install Prompt'),
                'input_attrs' => array(
                    'name' => 'os_manifest_name',
                ),
            )
        );

        $wp_customize->add_setting(
            'os_manifest_short_name',
            array(
                'default'   => get_bloginfo('name'),
                'transport' => 'refresh',
            )
        );

        $wp_customize->add_control(
            'os_manifest_short_name',
            array(
                'label'       => 'Short Name',
                'section'     => 'os_manifest',
                'settings'    => 'os_manifest_short_name',
                'type'        => 'text',
                'description' => __('Application Name In App Launcher'),
                'input_attrs' => array(
                    'name' => 'os_manifest_short_name',
                ),
            )
        );

        $wp_customize->add_setting(
            'os_manifest_description',
            array(
                'default'   => get_bloginfo('description'),
                'transport' => 'refresh',
            )
        );

        $wp_customize->add_control(
            'os_manifest_description',
            array(
                'label'       => 'Description',
                'section'     => 'os_manifest',
                'settings'    => 'os_manifest_description',
                'name'        => 'os_manifest_description',
                'type'        => 'text',
                'description' => __('Application Description'),
                'input_attrs' => array(
                    'name' => 'os_manifest_description',
                ),
            )
        );

        $wp_customize->add_setting(
            'os_manifest_language',
            array(
                'default'   => get_bloginfo('language'),
                'transport' => 'refresh',
            )
        );

        $wp_customize->add_control(
            'os_manifest_language',
            array(
                'label'       => 'Language',
                'section'     => 'os_manifest',
                'settings'    => 'os_manifest_language',
                'name'        => 'os_manifest_language',
                'type'        => 'text',
                'description' => __('Application Language'),
                'input_attrs' => array(
                    'name' => 'os_manifest_language',
                ),
            )
        );

        $wp_customize->add_setting(
            'os_manifest_display',
            array(
                'default' => 'standalone',
            )
        );

        $wp_customize->add_control(
            'os_manifest_display',
            array(
                'label'       => __('Display'),
                'section'     => 'os_manifest',
                'type'        => 'select',
                'description' => __('App display for users'),
                'choices'     => array(
                    'fullscreen' => __('Full Screen'),
                    'standalone' => __('Stand Alone'),
                    'minimal-ui' => __('Minimal UI'),
                    'browser'    => __('Standard Browser'),
                ),
                'input_attrs' => array(
                    'name' => 'os_manifest_display',
                ),
            )
        );

        $wp_customize->add_setting(
            'os_manifest_orientation',
            array(
                'default' => 'portrait',
            )
        );

        $wp_customize->add_control(
            'os_manifest_orientation',
            array(
                'label'       => __('Orientation'),
                'section'     => 'os_manifest',
                'type'        => 'select',
                'description' => __('Screen Orientation'),
                'choices'     => array(
                    'portrait'  => __('Portrait'),
                    'landscape' => __('Landscape'),
                ),
                'input_attrs' => array(
                    'name' => 'os_manifest_orientation',
                ),
            )
        );

        $wp_customize->add_setting(
            'os_manifest_color',
            array(
                'default' => '#ffffff',
            )
        );

        $wp_customize->add_control(
            new \WP_Customize_Color_Control(
                $wp_customize,
                'os_manifest_color',
                array(
                    'label'    => 'App Color',
                    'section'  => 'os_manifest',
                    'settings' => 'os_manifest_color',
                )
            )
        );

        $wp_customize->add_setting(
            'os_manifest_background_color',
            array(
                'default' => '#000000',
            )
        );

        $wp_customize->add_control(
            new \WP_Customize_Color_Control(
                $wp_customize,
                'os_manifest_background_color',
                array(
                    'label'    => 'App Background Color',
                    'section'  => 'os_manifest',
                    'settings' => 'os_manifest_background_color',
                )
            )
        );
    }

    public function os_customizer_social_settings($wp_customize)
    {
        $wp_customize->add_section(
            'os_social',
            array(
                'panel'    => 'os_options',
                'title'    => 'Social Links',
                'priority' => 20,
            )
        );

        $wp_customize->add_setting(
            'os_facebook',
            array(
                'default'   => 'https://www.facebook.com/',
                'transport' => 'refresh',
            )
        );

        $wp_customize->add_control(
            'os_facebook',
            array(
                'label'       => 'Facebook Page',
                'section'     => 'os_social',
                'settings'    => 'os_facebook',
                'type'        => 'text',
                'description' => __('Link to Facebook page'),
                'input_attrs' => array(
                    'name' => 'os_facebook',
                ),
            )
        );

        $wp_customize->add_setting(
            'os_linkedin',
            array(
                'default'   => 'https://www.linkedin.com/',
                'transport' => 'refresh',
            )
        );

        $wp_customize->add_control(
            'os_linkedin',
            array(
                'label'       => 'LinkedIn Page',
                'section'     => 'os_social',
                'settings'    => 'os_linkedin',
                'type'        => 'text',
                'description' => __('Link to linkedin page'),
                'input_attrs' => array(
                    'name' => 'os_linkedin',
                ),
            )
        );

        $wp_customize->add_setting(
            'os_twitter',
            array(
                'default'   => 'https://www.twitter.com/',
                'transport' => 'refresh',
            )
        );

        $wp_customize->add_control(
            'os_twitter',
            array(
                'label'       => 'Twitter Page',
                'section'     => 'os_social',
                'settings'    => 'os_twitter',
                'type'        => 'text',
                'description' => __('Link to twitter page'),
                'input_attrs' => array(
                    'name' => 'os_twitter',
                ),
            )
        );

        $wp_customize->add_setting(
            'os_youtube',
            array(
                'default'   => 'https://www.youtube.com/',
                'transport' => 'refresh',
            )
        );

        $wp_customize->add_control(
            'os_youtube',
            array(
                'label'       => 'YouTube Page',
                'section'     => 'os_social',
                'settings'    => 'os_youtube',
                'type'        => 'text',
                'description' => __('Link to YouTube page'),
                'input_attrs' => array(
                    'name' => 'os_youtube',
                ),
            )
        );

        $wp_customize->add_setting(
            'os_whatsapp',
            array(
                'default'   => '+254705459494',
                'transport' => 'refresh',
            )
        );

        $wp_customize->add_control(
            'os_whatsapp',
            array(
                'label'       => 'WhatsApp Number',
                'section'     => 'os_social',
                'settings'    => 'os_whatsapp',
                'type'        => 'text',
                'description' => __('WhatsApp Phone Number'),
                'input_attrs' => array(
                    'name' => 'os_whatsapp',
                ),
            )
        );
    }
}
