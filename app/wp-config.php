<?php

require_once(dirname(__DIR__) . '/vendor/autoload.php');

$root_dir = dirname(__DIR__);
$webroot_dir = $root_dir . '/app';
define('WEBROOT_DIR', $webroot_dir);

/**
 * URLs
 */
define('WP_HOME', 'http://localhost:3000');
define('WP_SITEURL', 'http://localhost:3000/wordpress');

/**
 * Custom Content Directory
 */
define( 'PLUGINDIR', $webroot_dir . '/plugins' );
define( 'WP_PLUGIN_DIR', $webroot_dir . '/plugins' );
define( 'WP_PLUGIN_URL',  WP_HOME . '/plugins' );
define( 'UPLOADS', $webroot_dir . '/uploads' );

/**
 * DB settings
 */
$table_prefix = 'wp_';
// define('DB_NAME', 'dbname');
// define('DB_USER', 'dbuser');
// define('DB_PASSWORD', 'dbpassword');
// define('DB_HOST', 'localhost');
// define('DB_CHARSET', 'utf8');
// define('DB_COLLATE', '');

/**
 * Authentication Unique Keys and Salts
 */
define('AUTH_KEY', '');
define('SECURE_AUTH_KEY', '');
define('LOGGED_IN_KEY', '');
define('NONCE_KEY', '');
define('AUTH_SALT', '');
define('SECURE_AUTH_SALT', '');
define('LOGGED_IN_SALT', '');
define('NONCE_SALT', '');

/**
 * Custom Settings
 */
define('AUTOMATIC_UPDATER_DISABLED', true);
define('DISABLE_WP_CRON', true);
define('DISALLOW_FILE_EDIT', true);

/**
 * Increase memory
 */
define( 'WP_MEMORY_LIMIT', '128M' );
define( 'WP_MAX_MEMORY_LIMIT', '256M' );

/**
* SQLITE DB
*/
define('USE_MYSQL', false);
define('DB_DIR', $webroot_dir . '/app/db/');
define('DB_FILE', 'memory.sqlite');

// Optional debug config
// @ini_set( 'log_errors', 'Off' );
// @ini_set( 'display_errors', 'On' );
// define( 'WP_DEBUG', true );
// define( 'WP_DEBUG_LOG', false );
// define( 'WP_DEBUG_DISPLAY', true );
// define( 'SCRIPT_DEBUG', true );
// define( 'CONCATENATE_SCRIPTS', false );

/**
 * Bootstrap WordPress
 */
if (!defined('ABSPATH')) {
  define('ABSPATH', $webroot_dir . '/wordpress/');
}

require_once(ABSPATH . 'wp-settings.php');
