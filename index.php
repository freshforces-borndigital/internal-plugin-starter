<?php
/**
 * Plugin Name: YOURPLUGINNAME
 * Plugin URI:  YOURPLUGINURL
 * Description: Specific plugin for YOURPROJECTNAME
 * Version:     1.0.0
 * Author:      YOURNAME
 * Author URI:  YOURSITE
 * License:     MIT
 * License URI: YOURPLUGINURL/LICENSE.txt
 */

defined('ABSPATH') or die('Can\'t access directly');

load_plugin_textdomain('YOURPROJECTNAME', false, basename( dirname( __FILE__ ) ) . '/languages');

// helper constants
define('INTERNAL_PLUGIN_URL', rtrim(plugin_dir_url(__FILE__), '/' ));
define('INTERNAL_PLUGIN_DIR', rtrim(plugin_dir_path(__FILE__), '/' ));

// composer
require_once INTERNAL_PLUGIN_DIR . '/vendor/autoload.php';

// frameworks
require_once INTERNAL_PLUGIN_DIR . '/frameworks/autoload.php';

// components
$autoloads = glob(INTERNAL_PLUGIN_DIR . "/*/autoload.php");

foreach ($autoloads as $file) {
	require_once $file;
}
