<?php

/**
 * @package  WordPress Theme
 * @subpackage  template
 * @author Osen Concepts <hi@osen.co.ke>
 * @version 0.0.1
 * 
 */

namespace Osen\Theme\Wpt;

class Widgets
{
    function __construct()
    {

add_action('widgets_init', array($this, 'os_blog_sidebar'));
add_action('widgets_init', array($this, 'os_shop_sidebar'));
    }
    function os_blog_sidebar()
{
    register_sidebar(
        array(
            'name' => __('Blog', 'intrinsic'),
            'id' => 'blog-side-bar',
            'description' => __('Blog Sidebar', 'intrinsic'),
            'before_widget' => '<aside class="widget">',
            'after_widget' => "</aside>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}

function os_shop_sidebar()
{
    register_sidebar(
        array(
            'name' => __('Shop', 'intrinsic'),
            'id' => 'shop-side-bar',
            'description' => __('Shop Sidebar', 'intrinsic'),
            'before_widget' => '<aside class="widget">',
            'after_widget' => "</aside>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
}