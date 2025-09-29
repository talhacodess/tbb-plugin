<?php
// Include the files for admin
function tbb_plugin_admin_scripts(){
    wp_enqueue_style( 'tbb-plugin-admin-css',TBB_PLUGIN_DIR_URL .'admin/css/admin.css', '', TBB_PLUGIN_VERSION);
    wp_enqueue_script( 'tbb-plugin-admin-js', TBB_PLUGIN_DIR_URL. 'admin/js/admin.js', '',TBB_PLUGIN_VERSION, true);
}

add_action('admin_enqueue_scripts', 'tbb_plugin_admin_scripts');
 // Include the files for frontend

 function tbb_plugin_public_scripts(){
    wp_enqueue_style( 'tbb-plugin-public-css',TBB_PLUGIN_DIR_URL .'public/css/public.css', '', TBB_PLUGIN_VERSION);
    wp_enqueue_script( 'tbb-plugin-public-js', TBB_PLUGIN_DIR_URL. 'public/js/public.js', '',TBB_PLUGIN_VERSION, true);
}

add_action('wp_enqueue_scripts', 'tbb_plugin_public_scripts');