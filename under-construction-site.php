<?php
/**
 * Plugin Name: Under Construction Site
 * Version: 1.4.6
 * Description: Under Construction plugin manage your website while it's under maintenance mode,coming soon or site offline mode. Also collects emails from your visitors.
 * Author: wpshopmart
 * Author URI: https://www.wpshopmart.com
 * Plugin URI: https://www.wpshopmart.com/plugins
 */
 
if ( ! defined( 'ABSPATH' ) ) exit;
 
define("WPSM_UC_TEXT_DOMAIN","wpsm_uc_lang" );
define("WPSM_UC_PLUGIN_URL", plugin_dir_url(__FILE__));

/*
* Plugin Translation
*/
add_action('plugins_loaded', 'wpsm_uc_language_translation');
function wpsm_uc_language_translation() {
	load_plugin_textdomain( WPSM_UC_TEXT_DOMAIN, FALSE, dirname( plugin_basename(__FILE__)).'/functions/language/' );
}

/*
* Install Default Settings
*/
register_activation_hook( __FILE__, 'wpsm_uc_default_data' );
function wpsm_uc_default_data()
{
	include('functions/default-data.php');
}

/*
* Under Construction Menu
*/
add_action('admin_menu','wpsm_uc_menu');

function wpsm_uc_menu()
{
    //plugin menu name for Under Construction plugin
    $menu = add_submenu_page('options-general.php','Under Construction', 'Under Construction','administrator', 'wpsm_uc','wpsm_uc_content');
	add_action( 'admin_print_styles-' . $menu, 'wpsm_uc_plugin_js_css' );
}
require_once('functions/script.php');
function wpsm_uc_content()
{  
	require_once('includes/content.php');
}

require_once('functions/data-save-post.php');
require_once('functions/data-reset-post.php');
require_once('launch/launch.php');

// Add settings link on plugin page
function wpsm_uc_settings_link($links) { 
  $settings_link = '<a href="options-general.php?page=wpsm_uc">Settings</a>'; 
  array_unshift($links, $settings_link); 
  return $links; 
}
// Admin plugin install menu links 
$plugin = plugin_basename(__FILE__); 
add_filter("plugin_action_links_$plugin", 'wpsm_uc_settings_link' );

?>