<?php
wp_nonce_field( 'cpt_ui_inner_metabox', 'cpt_ui_metabox_nonce' );
$cpt_settings = isset(get_post_meta( $post->ID, '_cpt_settings_meta')[0]) ? get_post_meta( $post->ID, '_cpt_settings_meta')[0] : array();

$cpt_id = isset($cpt_settings['cpt_id']) ? $cpt_settings['cpt_id'] : 'cpt_' . $post->ID;

$cpt_singular_name = isset($cpt_settings['cpt_singular_name']) ? $cpt_settings['cpt_singular_name'] : '';

$cpt_add_new = isset($cpt_settings['cpt_add_new']) ? $cpt_settings['cpt_add_new'] : '';
$cpt_add_new_item = isset($cpt_settings['cpt_add_new_item']) ? $cpt_settings['cpt_add_new_item'] : '';
$cpt_edit_item = isset($cpt_settings['cpt_edit_item']) ? $cpt_settings['cpt_edit_item'] : '';
$cpt_new_item = isset($cpt_settings['cpt_new_item']) ? $cpt_settings['cpt_new_item'] : '';
$cpt_view_item = isset($cpt_settings['cpt_view_item']) ? $cpt_settings['cpt_view_item'] : '';
$cpt_view_items = isset($cpt_settings['cpt_view_items']) ? $cpt_settings['cpt_view_items'] : '';
$cpt_search_items = isset($cpt_settings['cpt_search_items']) ? $cpt_settings['cpt_search_items'] : '';
$cpt_not_found = isset($cpt_settings['cpt_not_found']) ? $cpt_settings['cpt_not_found'] : '';
$cpt_not_found_in_trash = isset($cpt_settings['cpt_not_found_in_trash']) ? $cpt_settings['cpt_not_found_in_trash'] : '';
$cpt_parent_item_colon = isset($cpt_settings['cpt_parent_item_colon']) ? $cpt_settings['cpt_parent_item_colon'] : '';
$cpt_all_items = isset($cpt_settings['cpt_all_items']) ? $cpt_settings['cpt_all_items'] : '';
$cpt_archives = isset($cpt_settings['cpt_archives']) ? $cpt_settings['cpt_archives'] : '';
$cpt_attributes = isset($cpt_settings['cpt_attributes']) ? $cpt_settings['cpt_attributes'] : '';
$cpt_insert_into_item = isset($cpt_settings['cpt_insert_into_item']) ? $cpt_settings['cpt_insert_into_item'] : '';
$cpt_uploaded_to_this_item = isset($cpt_settings['cpt_uploaded_to_this_item']) ? $cpt_settings['cpt_uploaded_to_this_item'] : '';
$cpt_featured_image = isset($cpt_settings['cpt_featured_image']) ? $cpt_settings['cpt_featured_image'] : '';
$cpt_set_featured_image = isset($cpt_settings['cpt_set_featured_image']) ? $cpt_settings['cpt_set_featured_image'] : '';
$cpt_remove_featured_image = isset($cpt_settings['cpt_remove_featured_image']) ? $cpt_settings['cpt_remove_featured_image'] : '';
$cpt_use_featured_image = isset($cpt_settings['cpt_use_featured_image']) ? $cpt_settings['cpt_use_featured_image'] : '';
$cpt_menu_name = isset($cpt_settings['cpt_menu_name']) ? $cpt_settings['cpt_menu_name'] : '';
$cpt_name_admin_bar = isset($cpt_settings['cpt_name_admin_bar']) ? $cpt_settings['cpt_name_admin_bar'] : '';
$cpt_item_published = isset($cpt_settings['cpt_item_published']) ? $cpt_settings['cpt_item_published'] : '';
$cpt_item_published_privately = isset($cpt_settings['cpt_item_published_privately']) ? $cpt_settings['cpt_item_published_privately'] : '';
$cpt_item_reverted_to_draft = isset($cpt_settings['cpt_item_reverted_to_draft']) ? $cpt_settings['cpt_item_reverted_to_draft'] : '';
$cpt_item_scheduled = isset($cpt_settings['cpt_item_scheduled']) ? $cpt_settings['cpt_item_scheduled'] : '';
$cpt_item_updated = isset($cpt_settings['cpt_item_updated']) ? $cpt_settings['cpt_item_updated'] : '';

$cpt_hierarchical = isset($cpt_settings['cpt_hierarchical']) && $cpt_settings['cpt_hierarchical'] == 0 ? 0 : 1;
$cpt_public = isset($cpt_settings['cpt_public']) && $cpt_settings['cpt_public'] == 0 ? 0 : 1;
$cpt_editor = isset($cpt_settings['cpt_editor']) && $cpt_settings['cpt_editor'] == 0 ? 0 : 1;
$cpt_excerpt = isset($cpt_settings['cpt_excerpt']) && $cpt_settings['cpt_excerpt'] == 0 ? 0 : 1;
$cpt_thumbnail = isset($cpt_settings['cpt_thumbnail']) && $cpt_settings['cpt_thumbnail'] == 0 ? 0 : 1;
$cpt_icon = isset($cpt_settings['cpt_icon']) ? $cpt_settings['cpt_icon'] : '';
$cpt_role = isset($cpt_settings['cpt_role']) && $cpt_settings['cpt_role'] == 0 ? 0 : 1;
?>
<div class="wp-cpt-row">
    <label for="cpt_id">
        <?php _e( 'ID', 'osen' ); ?>
    </label>
    <input type="text" id="cpt_id" name="cpt_settings[cpt_id]" value="<?php echo esc_attr( $cpt_id ); ?>" placeholder="<?php _e( 'ex: product', 'osen' ); ?>" required />
    <small><?php _e( 'Post type ID.', 'osen' ); ?></small>
</div>

<div class="wp-cpt-row">
    <label for="cpt_singular_name">
        <?php _e( 'Single name', 'osen' ); ?>
    </label>
    <input type="text" id="cpt_singular_name" name="cpt_settings[cpt_singular_name]" value="<?php echo esc_attr( $cpt_singular_name ); ?>" placeholder="<?php _e( 'ex: Product', 'osen' ); ?>" required />
    <small><?php _e( 'Singular name.', 'osen' ); ?></small>
</div>


<div class="wp-cpt-row advanced-cpt-settings">
    <label for="cpt_add_new">
        <?php _e( 'Add new', 'osen' ); ?>
    </label>
    <input type="text" id="cpt_add_new" name="cpt_settings[cpt_add_new]" value="<?php echo esc_attr( $cpt_add_new ); ?>" placeholder="<?php _e( 'ex: Add New', 'osen' ); ?>" />
    <small><?php _e( 'The add new text.', 'osen' ); ?></small>
</div>

<div class="wp-cpt-row advanced-cpt-settings">
    <label for="cpt_add_new_item">
        <?php _e( 'Add new item', 'osen' ); ?>
    </label>
    <input type="text" id="cpt_add_new_item" name="cpt_settings[cpt_add_new_item]" value="<?php echo esc_attr( $cpt_add_new_item ); ?>" placeholder="<?php _e( 'ex: Add new product', 'osen' ); ?>" />
    <small><?php _e( 'The add new item text.', 'osen' ); ?></small>
</div>

<div class="wp-cpt-row advanced-cpt-settings">
    <label for="cpt_edit_item">
        <?php _e( 'Edit item', 'osen' ); ?>
    </label>
    <input type="text" id="cpt_edit_item" name="cpt_settings[cpt_edit_item]" value="<?php echo esc_attr( $cpt_edit_item ); ?>" placeholder="<?php _e( 'ex: Edit product', 'osen' ); ?>" />
    <small><?php _e( 'The edit item text.', 'osen' ); ?></small>
</div>

<div class="wp-cpt-row advanced-cpt-settings">
    <label for="cpt_new_item">
        <?php _e( 'New item', 'osen' ); ?>
    </label>
    <input type="text" id="cpt_new_item" name="cpt_settings[cpt_new_item]" value="<?php echo esc_attr( $cpt_new_item ); ?>" placeholder="<?php _e( 'ex: New product', 'osen' ); ?>" />
    <small><?php _e( 'The new item text.', 'osen' ); ?></small>
</div>

<div class="wp-cpt-row advanced-cpt-settings">
    <label for="cpt_view_item">
        <?php _e( 'View item', 'osen' ); ?>
    </label>
    <input type="text" id="cpt_view_item" name="cpt_settings[cpt_view_item]" value="<?php echo esc_attr( $cpt_view_item ); ?>" placeholder="<?php _e( 'ex: View product', 'osen' ); ?>" />
    <small><?php _e( 'The view item text.', 'osen' ); ?></small>
</div>

<div class="wp-cpt-row advanced-cpt-settings">
    <label for="cpt_view_items">
        <?php _e( 'View items', 'osen' ); ?>
    </label>
    <input type="text" id="cpt_view_items" name="cpt_settings[cpt_view_items]" value="<?php echo esc_attr( $cpt_view_items ); ?>" placeholder="<?php _e( 'ex: View products', 'osen' ); ?>" />
    <small><?php _e( 'The view items text.', 'osen' ); ?></small>
</div>

<div class="wp-cpt-row advanced-cpt-settings">
    <label for="cpt_search_items">
        <?php _e( 'Search items', 'osen' ); ?>
    </label>
    <input type="text" id="cpt_search_items" name="cpt_settings[cpt_search_items]" value="<?php echo esc_attr( $cpt_search_items ); ?>" placeholder="<?php _e( 'ex: Search products', 'osen' ); ?>" />
    <small><?php _e( 'The search items text.', 'osen' ); ?></small>
</div>

<div class="wp-cpt-row advanced-cpt-settings">
    <label for="cpt_not_found">
        <?php _e( 'Not found', 'osen' ); ?>
    </label>
    <input type="text" id="cpt_not_found" name="cpt_settings[cpt_not_found]" value="<?php echo esc_attr( $cpt_not_found ); ?>" placeholder="<?php _e( 'ex: No product found', 'osen' ); ?>" />
    <small><?php _e( 'The not found text.', 'osen' ); ?></small>
</div>

<div class="wp-cpt-row advanced-cpt-settings">
    <label for="cpt_not_found_in_trash">
        <?php _e( 'Not found in trash', 'osen' ); ?>
    </label>
    <input type="text" id="cpt_not_found_in_trash" name="cpt_settings[cpt_not_found_in_trash]" value="<?php echo esc_attr( $cpt_not_found_in_trash ); ?>" placeholder="<?php _e( 'ex: No product found in trash', 'osen' ); ?>" />
    <small><?php _e( 'The not found in trash text.', 'osen' ); ?></small>
</div>

<div class="wp-cpt-row advanced-cpt-settings">
    <label for="cpt_parent_item_colon">
        <?php _e( 'Parent item', 'osen' ); ?>
    </label>
    <input type="text" id="cpt_parent_item_colon" name="cpt_settings[cpt_parent_item_colon]" value="<?php echo esc_attr( $cpt_parent_item_colon ); ?>" placeholder="<?php _e( 'ex: Parent product', 'osen' ); ?>" />
    <small><?php _e( 'The parent item text.', 'osen' ); ?></small>
</div>

<div class="wp-cpt-row advanced-cpt-settings">
    <label for="cpt_all_items">
        <?php _e( 'All items', 'osen' ); ?>
    </label>
    <input type="text" id="cpt_all_items" name="cpt_settings[cpt_all_items]" value="<?php echo esc_attr( $cpt_all_items ); ?>" placeholder="<?php _e( 'ex: All products', 'osen' ); ?>" />
    <small><?php _e( 'The all items text.', 'osen' ); ?></small>
</div>

<div class="wp-cpt-row advanced-cpt-settings">
    <label for="cpt_archives">
        <?php _e( 'Archivies', 'osen' ); ?>
    </label>
    <input type="text" id="cpt_archives" name="cpt_settings[cpt_archives]" value="<?php echo esc_attr( $cpt_archives ); ?>" placeholder="<?php _e( 'ex: Product archives', 'osen' ); ?>" />
    <small><?php _e( 'The archives text.', 'osen' ); ?></small>
</div>

<div class="wp-cpt-row advanced-cpt-settings">
    <label for="cpt_attributes">
        <?php _e( 'Attributes', 'osen' ); ?>
    </label>
    <input type="text" id="cpt_attributes" name="cpt_settings[cpt_attributes]" value="<?php echo esc_attr( $cpt_attributes ); ?>" placeholder="<?php _e( 'ex: Product attributes', 'osen' ); ?>" />
    <small><?php _e( 'The attributes text.', 'osen' ); ?></small>
</div>

<div class="wp-cpt-row advanced-cpt-settings">
    <label for="cpt_insert_into_item">
        <?php _e( 'Insert into item', 'osen' ); ?>
    </label>
    <input type="text" id="cpt_insert_into_item" name="cpt_settings[cpt_insert_into_item]" value="<?php echo esc_attr( $cpt_insert_into_item ); ?>" placeholder="<?php _e( 'ex: Insert into product', 'osen' ); ?>" />
    <small><?php _e( 'The insert into item text.', 'osen' ); ?></small>
</div>

<div class="wp-cpt-row advanced-cpt-settings">
    <label for="cpt_uploaded_to_this_item">
        <?php _e( 'Uploaded to this item', 'osen' ); ?>
    </label>
    <input type="text" id="cpt_uploaded_to_this_item" name="cpt_settings[cpt_uploaded_to_this_item]" value="<?php echo esc_attr( $cpt_uploaded_to_this_item ); ?>" placeholder="<?php _e( 'ex: Uploaded to this product', 'osen' ); ?>" />
    <small><?php _e( 'The uploaded to this item text.', 'osen' ); ?></small>
</div>

<div class="wp-cpt-row advanced-cpt-settings">
    <label for="cpt_featured_image">
        <?php _e( 'Featured image', 'osen' ); ?>
    </label>
    <input type="text" id="cpt_featured_image" name="cpt_settings[cpt_featured_image]" value="<?php echo esc_attr( $cpt_featured_image ); ?>" placeholder="<?php _e( 'ex: Featured image', 'osen' ); ?>" />
    <small><?php _e( 'The featured image text.', 'osen' ); ?></small>
</div>

<div class="wp-cpt-row advanced-cpt-settings">
    <label for="cpt_set_featured_image">
        <?php _e( 'Set featured image', 'osen' ); ?>
    </label>
    <input type="text" id="cpt_set_featured_image" name="cpt_settings[cpt_set_featured_image]" value="<?php echo esc_attr( $cpt_set_featured_image ); ?>" placeholder="<?php _e( 'ex: Set featured image', 'osen' ); ?>" />
    <small><?php _e( 'The set featured image text.', 'osen' ); ?></small>
</div>

<div class="wp-cpt-row advanced-cpt-settings">
    <label for="cpt_remove_featured_image">
        <?php _e( 'Remove featured image', 'osen' ); ?>
    </label>
    <input type="text" id="cpt_remove_featured_image" name="cpt_settings[cpt_remove_featured_image]" value="<?php echo esc_attr( $cpt_remove_featured_image ); ?>" placeholder="<?php _e( 'ex: Remove featured image', 'osen' ); ?>" />
    <small><?php _e( 'The remove featured image text.', 'osen' ); ?></small>
</div>

<div class="wp-cpt-row advanced-cpt-settings">
    <label for="cpt_use_featured_image">
        <?php _e( 'Use featured image', 'osen' ); ?>
    </label>
    <input type="text" id="cpt_use_featured_image" name="cpt_settings[cpt_use_featured_image]" value="<?php echo esc_attr( $cpt_use_featured_image ); ?>" placeholder="<?php _e( 'ex: Use as featured image', 'osen' ); ?>" />
    <small><?php _e( 'The use featured image text.', 'osen' ); ?></small>
</div>

<div class="wp-cpt-row advanced-cpt-settings">
    <label for="cpt_menu_name">
        <?php _e( 'Menu name', 'osen' ); ?>
    </label>
    <input type="text" id="cpt_menu_name" name="cpt_settings[cpt_menu_name]" value="<?php echo esc_attr( $cpt_menu_name ); ?>" placeholder="<?php _e( 'ex: Product', 'osen' ); ?>" />
    <small><?php _e( 'The menu name text.', 'osen' ); ?></small>
</div>

<div class="wp-cpt-row advanced-cpt-settings">
    <label for="cpt_name_admin_bar">
        <?php _e( 'Name admin bar', 'osen' ); ?>
    </label>
    <input type="text" id="cpt_name_admin_bar" name="cpt_settings[cpt_name_admin_bar]" value="<?php echo esc_attr( $cpt_name_admin_bar ); ?>" placeholder="<?php _e( 'ex: New product', 'osen' ); ?>" />
    <small><?php _e( 'The name admin bar text.', 'osen' ); ?></small>
</div>

<div class="wp-cpt-row advanced-cpt-settings">
    <label for="cpt_item_published">
        <?php _e( 'Item published', 'osen' ); ?>
    </label>
    <input type="text" id="cpt_item_published" name="cpt_settings[cpt_item_published]" value="<?php echo esc_attr( $cpt_item_published ); ?>" placeholder="<?php _e( 'ex: Product published', 'osen' ); ?>" />
    <small><?php _e( 'The item published text.', 'osen' ); ?></small>
</div>

<div class="wp-cpt-row advanced-cpt-settings">
    <label for="cpt_item_published_privately">
        <?php _e( 'Item published privately', 'osen' ); ?>
    </label>
    <input type="text" id="cpt_item_published_privately" name="cpt_settings[cpt_item_published]" value="<?php echo esc_attr( $cpt_item_published_privately ); ?>" placeholder="<?php _e( 'ex: Product published privately', 'osen' ); ?>" />
    <small><?php _e( 'The item published privately text.', 'osen' ); ?></small>
</div>

<div class="wp-cpt-row advanced-cpt-settings">
    <label for="cpt_item_reverted_to_draft">
        <?php _e( 'Item reverted to draft', 'osen' ); ?>
    </label>
    <input type="text" id="cpt_item_reverted_to_draft" name="cpt_settings[cpt_item_reverted_to_draft]" value="<?php echo esc_attr( $cpt_item_reverted_to_draft ); ?>" placeholder="<?php _e( 'ex: Product reverted to draft', 'osen' ); ?>" />
    <small><?php _e( 'The item reverted to draft text.', 'osen' ); ?></small>
</div>

<div class="wp-cpt-row advanced-cpt-settings">
    <label for="cpt_item_scheduled">
        <?php _e( 'Item scheduled', 'osen' ); ?>
    </label>
    <input type="text" id="cpt_item_scheduled" name="cpt_settings[cpt_item_scheduled]" value="<?php echo esc_attr( $cpt_item_scheduled ); ?>" placeholder="<?php _e( 'ex: Product scheduled', 'osen' ); ?>" />
    <small><?php _e( 'The item scheduled text.', 'osen' ); ?></small>
</div>

<div class="wp-cpt-row advanced-cpt-settings">
    <label for="cpt_item_updated">
        <?php _e( 'Item updated', 'osen' ); ?>
    </label>
    <input type="text" id="cpt_item_updated" name="cpt_settings[cpt_item_updated]" value="<?php echo esc_attr( $cpt_item_updated ); ?>" placeholder="<?php _e( 'ex: Product updated', 'osen' ); ?>" />
    <small><?php _e( 'The item updated text.', 'osen' ); ?></small>
</div>


<div class="wp-cpt-row">
    <label for="cpt_hierarchical">
        <?php _e( 'Hierarchical', 'osen' ); ?>
    </label>
    <select id="cpt_hierarchical" name="cpt_settings[cpt_hierarchical]">
        <option value="1" <?php selected( $cpt_hierarchical, 1 ); ?>><?php _e( 'YES', 'osen' ); ?></option>
        <option value="0" <?php selected( $cpt_hierarchical, 0 ); ?>><?php _e( 'NO', 'osen' ); ?></option>
    </select>    
    <small><?php _e( 'If set to "YES" it will be possible to set a parent POST TYPE (as for pages).', 'osen' ); ?></small>
</div>

<div class="wp-cpt-row">
    <label for="cpt_public">
        <?php _e( 'Visibility', 'osen' ); ?>
    </label>
    <select id="cpt_public" name="cpt_settings[cpt_public]">
        <option value="1" <?php selected( $cpt_public, 1 ); ?>><?php _e( 'YES', 'osen' ); ?></option>
        <option value="0" <?php selected( $cpt_public, 0 ); ?>><?php _e( 'NO', 'osen' ); ?></option>
    </select>    
    <small><?php _e( 'If set to "YES" it will be shown in the frontend and will have a permalink and a single template.', 'osen' ); ?></small>
</div>

<div class="wp-cpt-row">
    <label for="cpt_editor">
        <?php _e( 'Content editor', 'osen' ); ?>
    </label>
    <select id="cpt_editor" name="cpt_settings[cpt_editor]">
        <option value="1" <?php selected( $cpt_editor, 1 ); ?>><?php _e( 'YES', 'osen' ); ?></option>
        <option value="0" <?php selected( $cpt_editor, 0 ); ?>><?php _e( 'NO', 'osen' ); ?></option>
    </select>    
    <small><?php _e( 'If set to "YES" the content editor will be shown during creation / modification.', 'osen' ); ?></small>
</div>

<div class="wp-cpt-row">
    <label for="cpt_excerpt">
        <?php _e( 'Excerpt', 'osen' ); ?>
    </label>
    <select id="cpt_excerpt" name="cpt_settings[cpt_excerpt]">
        <option value="1" <?php selected( $cpt_excerpt, 1 ); ?>><?php _e( 'YES', 'osen' ); ?></option>
        <option value="0" <?php selected( $cpt_excerpt, 0 ); ?>><?php _e( 'NO', 'osen' ); ?></option>
    </select>    
    <small><?php _e( 'If set to "YES" the "Excerpt" field will be shown during creation / modification.', 'osen' ); ?></small>
</div>

<div class="wp-cpt-row">
    <label for="cpt_thumbnail">
        <?php _e( 'Featured image', 'osen' ); ?>
    </label>
    <select id="cpt_thumbnail" name="cpt_settings[cpt_thumbnail]">
        <option value="1" <?php selected( $cpt_thumbnail, 1 ); ?>><?php _e( 'YES', 'osen' ); ?></option>
        <option value="0" <?php selected( $cpt_thumbnail, 0 ); ?>><?php _e( 'NO', 'osen' ); ?></option>
    </select>    
    <small><?php _e( 'If set to "YES" the "Featured image" field will be shown during creation / modification.', 'osen' ); ?></small>
</div>

<div class="wp-cpt-row">
    <label for="cpt_icon">
        <?php _e( 'Menu icon', 'osen' ); ?>
    </label>
    <input type="text" id="cpt_icon" name="cpt_settings[cpt_icon]" value="<?php echo esc_attr( $cpt_icon ); ?>" placeholder="dashicons-tag" />
    <small><?php _e( 'You can enter the name of an <a href="https://developer.wordpress.org/resource/dashicons" target="_blank" rel="nofolow">Dashicons</a> icon (ex: dashicons-tag) or the URL of an image (20px * 20px).', 'osen' ); ?></small>
</div>

<div class="wp-cpt-row">
    <label for="cpt_role">
        <?php _e( 'Administrators only', 'osen' ); ?>
    </label>
    <select id="cpt_role" name="cpt_settings[cpt_role]">
        <option value="1" <?php selected( $cpt_role, 1 ); ?>><?php _e( 'YES', 'osen' ); ?></option>
        <option value="0" <?php selected( $cpt_role, 0 ); ?>><?php _e( 'NO', 'osen' ); ?></option>
    </select>    
    <small><?php _e( 'If set to "YES", only the administrators can create / modify these contents, if "NO" all the roles with the minimum capacity of "edit_posts".', 'osen' ); ?></small>
</div>

<button class="advanced-cpt-settings-btn"><span class="dashicons 
    dashicons-admin-tools"></span><?php _e( 'Advanced view', 'osen' ); ?></button>
<button class="normal-cpt-settings-btn"><span class="dashicons 
    dashicons-admin-tools"></span><?php _e( 'Simple view', 'osen' ); ?></button>

