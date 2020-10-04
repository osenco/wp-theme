<?php

require_once plugin_dir_path(__FILE__) . 'vendor/autoload.php';

function getPostViews($postID)
{
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if ($count == '') {
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
		return "0 View";
	}

	return $count . ' Views';
}

function setPostViews($postID)
{
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if ($count == '') {
		$count = 0;
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
	} else {
		$count++;
		update_post_meta($postID, $count_key, $count);
	}
}

function show_image($path = '')
{
	echo esc_url(get_template_directory_uri()) . "/{$path}";
}

function os_related_posts($post_id, $related_count = 2, $args = array())
{
	$terms = get_the_terms($post_id, 'post_tag');

	if (empty($terms)) $terms = array();

	$term_list = wp_list_pluck($terms, 'slug');

	$related_args = array(
		'post_type' => 'post',
		'posts_per_page' => $related_count,
		'post_status' => 'publish',
		'post__not_in' => array($post_id),
		'orderby' => 'rand',
		'tax_query' => array(
			array(
				'taxonomy' => 'post_tag',
				'field' => 'slug',
				'terms' => $term_list
			)
		)
	);

	return get_posts($related_args);
}

function os_theme_mod($key, $default = false, $before = '', $after = '')
{
	if (get_theme_mod($key) || $default !== false) {
		echo $before . get_theme_mod($key, $default) . $after;
	}
}

function pagination_nav()
{
	global $wp_query;

	if ($wp_query->max_num_pages > 1) { ?>
		<nav class="pagination justify-content-between" role="navigation">
			<div class="nav-next float-left"><?php previous_posts_link('<button class="btn btn-primary">&larr; Newer Posts</button>'); ?></div>
			<div class="nav-previous float-right"><?php next_posts_link('<button class="btn btn-primary">Older posts &rarr;</button>'); ?></div>
		</nav>
	<?php }
}

function previous_next()
{ ?>
	<nav class="pagination justify-content-between px-5" role="navigation">
		<div class="nav-previous float-left"><?php previous_post_link('&larr; %link'); ?></div>
		<div class="nav-next float-right"><?php next_post_link('%link &rarr;'); ?></div>
	</nav><?php
}

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
