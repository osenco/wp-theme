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
    function __construct()
    {
        add_action('customize_register', 'os_customizer_gen_settings');
    }

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
}
