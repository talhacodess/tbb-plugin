<?php
/*
 * Plugin Name:       tbb Plugin
 * Plugin URI:       https://talhacodes.com/
 * Description:       Handle the basics with this plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Talha Bashir
 * Author URI:        https://talhacodes.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       tbb-plugin
 */

if ( ! defined( 'ABSPATH')){
    exit; // Exit if accessed directly.
}

if ( !defined( 'TBB_PLUGIN_VERSION' ) ) {
    define( 'TBB_PLUGIN_VERSION', '1.0.0' );
}

if ( !defined( 'TBB_PLUGIN_DIR_PATH')){
    define( "TBB_PLUGIN_DIR_PATH", plugin_dir_path(__FILE__));
}
if ( !defined( 'TBB_PLUGIN_DIR_URL')){
    define( "TBB_PLUGIN_DIR_URL", plugin_dir_url(__FILE__));
}


require_once TBB_PLUGIN_DIR_PATH . 'inc/script.php';
require_once TBB_PLUGIN_DIR_PATH . 'inc/hook.php';

//Register CPT 
require_once TBB_PLUGIN_DIR_PATH .'inc/cpt.php';
//Register Taxonomy
require_once TBB_PLUGIN_DIR_PATH .'inc/taxonomy.php';

//Register Meta Box
require_once TBB_PLUGIN_DIR_PATH .'inc/metabox.php';