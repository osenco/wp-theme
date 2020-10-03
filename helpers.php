<?php
	
// Numbered Pagination
if (!function_exists('osen_pagination')) {

	function osen_pagination()
	{
		if (is_singular())
			return;

		global $wp_query;

		/** Stop execution if there's only 1 page */
		if ($wp_query->max_num_pages <= 1)
			return;

		$paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
		$max   = intval($wp_query->max_num_pages);

		/** Add current page to the array */
		if ($paged >= 1)
			$links[] = $paged;

		/** Add the pages around the current page to the array */
		if ($paged >= 3) {
			$links[] = $paged - 1;
			$links[] = $paged - 2;
		}

		if (($paged + 2) <= $max) {
			$links[] = $paged + 2;
			$links[] = $paged + 1;
		}

		echo '<div class="dsn-pagination">' . "\n";

		/** Previous Post Link */
		// if (get_previous_posts_link()) {
		// 	printf('%s', get_previous_posts_link('
		// 	<span class="button-m">
		// 		<svg viewBox="0 0 52 52" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
		// 			<path d="M3 26.7h39.5v3.5c0 .3.1.5.4.6.2.1.5.1.7-.1l5.9-4.2c.2-.1.3-.3.3-.5s-.1-.4-.3-.5l-5.9-4.2c-.1-.1-.3-.1-.4-.1-.1 0-.2 0-.3.1-.2.1-.4.3-.4.6v3.5H3c-.4 0-.7.3-.7.7 0 .3.3.6.7.6z">
		// 			</path>
		// 		</svg>
		// 		<span>PREV</span>
		// 	</span>'));
		// }

		/** Link to first page, plus ellipses if necessary */
		if (!in_array(1, $links)) {
			$class = 1 == $paged ? ' class="page-numbers current"' : ' class="page-numbers"';

			printf('<span %s><span class="dsn-numbers">
			<span class="number">%s</span>
			</span></span>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');

			if (!in_array(2, $links)) {
				echo '<a>…</a>';
			}
		}

		/** Link to current page, plus 2 pages in either direction if necessary */
		sort($links);
		foreach ((array) $links as $link) {
			$class = $paged == $link ? ' class="page-numbers current"' : ' class="page-numbers"';
			printf('<a %s href="%s"><span class="dsn-numbers">
			<span class="number">%s</span>
			</span></a>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
		}

		/** Link to last page, plus ellipses if necessary */
		if (!in_array($max, $links)) {
			if (!in_array($max - 1, $links)) {
				echo '<a>…</a>' . "\n";
			}
			$class = $paged == $max ? ' class="page-numbers current"' : ' class="page-numbers"';
			printf('<a %s href="%s"><span class="dsn-numbers">
			<span class="number">%s</span>
			</span></a>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
		}

		/** Next Post Link */
		if (get_next_posts_link()) {
			printf('%s' . "\n", get_next_posts_link('
			<span class="button-m">
				<svg viewBox="0 0 52 52" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
					<path d="M3 26.7h39.5v3.5c0 .3.1.5.4.6.2.1.5.1.7-.1l5.9-4.2c.2-.1.3-.3.3-.5s-.1-.4-.3-.5l-5.9-4.2c-.1-.1-.3-.1-.4-.1-.1 0-.2 0-.3.1-.2.1-.4.3-.4.6v3.5H3c-.4 0-.7.3-.7.7 0 .3.3.6.7.6z">
					</path>
				</svg>
				<span>NEXT</span>
			</span>'));
		}
		echo '</div>' . "\n";
	}
}

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
// Remove issues with prefetching adding extra views
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function show_image($path = ''){
	echo get_template_directory_uri()."/{$path}";
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