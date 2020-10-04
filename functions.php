<?php

require_once plugin_dir_path(__FILE__) . 'vendor/autoload.php';

function init_theme_name()
{
    $scripts = array(
        'main' => array(
            'path'    => 'assets/js/theme.js',
            'depends' => array('jquery'),
        ),
        'ajax' => array(
            'path' => 'assets/js/ajax.js',
        ),
    );

    $styles = array(
        'main' => 'assets/css/clean-blog.min.css'
    );

    new Osen\Theme\Wpt\Setup($styles, $scripts);
    new Osen\Theme\Wpt\App;
    new Osen\Theme\Wpt\Widgets;
    new Osen\Theme\Wpt\Customizer\Options;
}
init_theme_name();
