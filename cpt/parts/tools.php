<?php

$main_page = menu_page_url('tools',false);
$export_page = $main_page . '&action=export';
$import_page = $main_page . '&action=import';
$request_page = isset($_GET['action']) && !empty($_GET['action']) && in_array($_GET['action'], array('export','import') ) ? $_GET['action'] : 'settings';

?>
<div class="wrap wp-cpt-tools">
    <h1><?php _e('Custom post types &rsaquo; Tools & Settings', 'osen' ); ?></h1>

    <nav class="nav-tab-wrapper wp-clearfix" aria-label="Secondary menu">
        <a href="<?php echo $main_page; ?>" class="nav-tab<?php echo ($request_page == 'settings' ? ' nav-tab-active' : ''); ?>"><?php _e('Settings', 'osen' ); ?></a>
        <a href="https://www.andreadegiovine.it/risorse/plugin/custom-post-types?doc" class="nav-tab" target="_blank"><?php _e('Documentation', 'osen' ); ?></a>
        <a href="<?php echo $export_page; ?>" class="nav-tab<?php echo ($request_page == 'export' ? ' nav-tab-active' : ''); ?>"><?php _e('Export', 'osen' ); ?></a>
        <a href="<?php echo $import_page; ?>" class="nav-tab<?php echo ($request_page == 'import' ? ' nav-tab-active' : ''); ?>"><?php _e('Import', 'osen' ); ?></a>
    </nav>

    <div class="tools-page page-<?php echo $request_page;?>">

        <?php 
        if( file_exists(plugin_dir_path( __FILE__ ) . '/tools-'.$request_page.'.php') ){
            include(plugin_dir_path( __FILE__ ) . '/tools-'.$request_page.'.php'); 
        }
        ?>

    </div>


</div>