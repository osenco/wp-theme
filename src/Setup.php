<?php

/**
 * @package  WordPress Theme
 * @subpackage  template
 * @author Osen Concepts <hi@osen.co.ke>
 * @version 0.0.1
 * 
 */

namespace Osen\Theme\Wpt;

class Setup
{
    public $styles = [];
    public $scripts = [];

    function __construct($styles = [], $scripts = [])
    {
        $this->styles = $styles;
        $this->scripts = $scripts;
        add_action('after_setup_theme', array($this, 'theme_setup'));
        add_filter('body_class', array($this, 'os_custom_body_class'));
        add_action('wp_print_styles', array($this, 'os_deregister_styles'), 100);
        add_action('wp_enqueue_scripts', array($this, 'os_en_scripts'));
        //add_action('admin_enqueue_scripts', array($this, 'os_load_custom_wp_admin_style'));
        add_action('after_setup_theme', array($this, 'os_setup_thumbnails'));
        add_action('pre_get_posts', array($this, 'os_custom_post_type_to_query'));
        add_filter('enter_title_here', array($this, 'wpb_change_title_text'));
        add_filter('get_the_archive_title', array($this, 'os_sanitize_archive_title'));
        add_filter('excerpt_length', array($this, 'os_excerpt_length'), 999);
        add_filter('previous_posts_link_attributes', array($this, 'wpse_230552'));
        add_action('pre_get_posts', array($this, 'os_add_custom_type_to_query'));
        add_filter('next_posts_link_attributes', array($this, 'wpse_next'));
        add_filter('the_tags', array($this, 'tag_badges'), 10, 1);
    }

    /**
     * Essential theme supports
     */
    function theme_setup()
    {
        /** automatic feed link*/
        add_theme_support('automatic-feed-links');

        /** tag-title **/
        add_theme_support('title-tag');

        /** post formats */
        $post_formats = array('aside', 'image', 'gallery', 'video', 'audio', 'link', 'quote', 'status');
        add_theme_support('post-formats', $post_formats);

        /** post thumbnail **/
        add_theme_support('post-thumbnails');

        /** HTML5 support **/
        add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

        /** refresh widgest **/
        add_theme_support('customize-selective-refresh-widgets');

        /** custom background **/
        $bg_defaults = array(
            'default-image'          => '',
            'default-preset'         => 'default',
            'default-size'           => 'cover',
            'default-repeat'         => 'no-repeat',
            'default-attachment'     => 'scroll',
        );
        add_theme_support('custom-background', $bg_defaults);

        /** custom header **/
        $header_defaults = array(
            'default-image'          => '',
            'width'                  => 300,
            'height'                 => 60,
            'flex-height'            => true,
            'flex-width'             => true,
            'default-text-color'     => '',
            'header-text'            => true,
            'uploads'                => true,
        );
        add_theme_support('custom-header', $header_defaults);

        /** custom log **/
        add_theme_support('custom-logo', array(
            'height'      => 60,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => array('site-title', 'site-description'),
        ));
    }

    function os_deregister_styles()
    {
        wp_deregister_style('contact-form-7');
    }

    /**
     * Load stylesheets and scripts
     */
    function os_en_scripts()
    {
        wp_enqueue_style('style', get_stylesheet_uri());

        wp_enqueue_script('jquery');

        foreach ($this->styles as $key => $value) {
            wp_enqueue_style($key, get_template_directory_uri() . '/' . $value, array());
        }

        foreach ($this->scripts as $key => $value) {
            wp_enqueue_script($key, get_template_directory_uri() . '/' . $value['path'], $value['depends'] ?? [], '', $value['footer'] ?? true);
        }

        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
    }

    function os_load_custom_wp_admin_style()
    {
        wp_register_style('os_custom_wp_admin_css', get_template_directory_uri() . '/assets/css/admin.css', false, '');
        wp_enqueue_style('os_custom_wp_admin_css');
    }

    /**
     * Image sizes
     */
    function os_setup_thumbnails()
    {
        add_image_size('iter_gioga_testimonials_thumb', 120, 120, true);
        add_image_size('project_image', 384, 384, true);
        add_image_size('methode_image', 932, 534, true);
    }

    /**
     * Remove type name in front of archive titles
     */

    function os_sanitize_archive_title($title)
    {
        if (is_category()) {
            $title = 'In category: ' . single_cat_title('', false);
        } elseif (is_tag()) {
            $title = 'Tagged: ' . single_tag_title('', false);
        } elseif (is_author()) {
            $title = 'Posts by ' . get_the_author();
        } elseif (is_post_type_archive()) {
            $title = post_type_archive_title('', false);
        } elseif (is_tax()) {
            $title = single_term_title('', false);
        } else {
            $title = __('News');
        }

        return $title;
    }

    function os_add_custom_type_to_query($notused)
    {
        if (!is_admin()) {
            global $wp_query;
            if (is_author() || is_home()) {
                $wp_query->set('post_type',  array('post', 'product'));
            }
        }
    }

    function wpb_change_title_text($title)
    {
        $screen = get_current_screen();

        switch ($screen->post_type) {
            case 'member':
                return  'Enter full name';
                break;

            case 'testimonial':
                return  'Enter user full name';
                break;

            default:
                return "Enter {$screen->post_type} title";
                break;
        }
    }

    function os_custom_post_type_to_query($query)
    {
        if ($query->is_category() || $query->is_tag()) {
            $query->set('post_type', array('post', 'project', 'service', 'os_client'));
        }
    }

    function os_excerpt_length($length)
    {
        return 30;
    }

    function wpse_230552()
    {
        return 'class="next page-numbers"';
    }

    function wpse_next()
    {
        return 'class="next page-numbers"';
    }

    function os_custom_body_class($classes)
    {
        if (is_front_page() || is_home() || is_page('home')) {
            // if ( ( $key = array_search( 'page', $classes ) ) !== false ) {
            // 	unset( $classes[$key] );
            // }
            // if ( ( $key = array_search( 'home', $classes ) ) !== false ) {
            // 	unset( $classes[$key] );
            // }
            $classes[] = 'home blog';
        } else {
            $classes[] = '';
        }

        return $classes;
    }

    function tag_badges($html) {
return str_replace('<a', '<a class="badge badge-pill badge-light"', $html);
    }
}
