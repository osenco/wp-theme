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
    public function __construct()
    {
        add_action('widgets_init', array($this, 'os_blog_sidebar'));
        add_action('widgets_init', array($this, 'os_shop_sidebar'));
    }

    public function os_blog_sidebar()
    {
        register_sidebar(
            array(
                'name'          => __('Blog', 'osen'),
                'id'            => 'blog-side-bar',
                'description'   => __('Blog Sidebar', 'osen'),
                'before_widget' => '<aside class="widget">',
                'after_widget'  => "</aside>",
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );
    }

    public function os_shop_sidebar()
    {
        register_sidebar(
            array(
                'name'          => __('Shop', 'osen'),
                'id'            => 'shop-side-bar',
                'description'   => __('Shop Sidebar', 'osen'),
                'before_widget' => '<aside class="widget">',
                'after_widget'  => "</aside>",
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );
    }
}
