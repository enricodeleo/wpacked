<?php

// Load all composer dependencies
require_once(dirname(__DIR__) . '/vendor/autoload.php');

// Load env variables
Dotenv::load(dirname(__DIR__));

// which environment is it?
define('ENVIRONMENT', getenv('ENVIRONMENT') );

$root_dir = dirname(__DIR__);

$webroot_dir = $root_dir . '/app';
define('WEBROOT_DIR', $webroot_dir);

/**
 * URLs
 */
define('WP_HOME', getenv('WP_HOME'));
define('WP_SITEURL', getenv('WP_SITEURL'));

/**
 * Custom Content Directory
 */
define('CONTENT_DIR', '/content');
define('WP_CONTENT_DIR', $webroot_dir . CONTENT_DIR);
define('WP_CONTENT_URL', WP_HOME . CONTENT_DIR);

/**
 * DB settings
 */
$table_prefix = 'wp_';
define('USE_MYSQL', getenv('USE_MYSQL'));  // turn it to true if you want to use MySQL instead of SQLite
define('DB_NAME', getenv('DB_NAME'));
define('DB_USER', getenv('DB_USER'));
define('DB_PASSWORD', getenv('DB_PASSWORD'));
define('DB_HOST', getenv('DB_HOST'));
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

/**
* SQLITE DB
*/
define('DB_DIR', $root_dir  . '/database/');
define('DB_FILE', 'db.sqlite');

/**
 * Authentication Unique Keys and Salts
 */
define('AUTH_KEY',         getenv('AUTH_KEY'));
define('SECURE_AUTH_KEY',  getenv('SECURE_AUTH_KEY'));
define('LOGGED_IN_KEY',    getenv('LOGGED_IN_KEY'));
define('NONCE_KEY',        getenv('NONCE_KEY'));
define('AUTH_SALT',        getenv('AUTH_SALT'));
define('SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT'));
define('LOGGED_IN_SALT',   getenv('LOGGED_IN_SALT'));
define('NONCE_SALT',       getenv('NONCE_SALT'));

/**
 * Custom Settings
 */
define('AUTOMATIC_UPDATER_DISABLED', true);
define('DISABLE_WP_CRON', getenv('DISABLE_WP_CRON')); 
define('DISALLOW_FILE_EDIT', true); // don't add plugins or edit files within the dashboard 

/**
 * Increase default memory limit
 */
define( 'WP_MEMORY_LIMIT', '128M' );
define( 'WP_MAX_MEMORY_LIMIT', '256M' );

// Optional debug config
if ( ENVIRONOMENT == 'development' ) {
  @ini_set('error_reporting', E_ALL);
  @ini_set('display_errors', '1');
  @ini_set('log_errors', '1');
  define( 'WP_DEBUG', true );
  define( 'WP_DEBUG_DISPLAY', true );
  define( 'WP_DEBUG_LOG', true );
}

/**
 * Bootstrap WordPress
 */
if (!defined('ABSPATH')) {
  define('ABSPATH', $webroot_dir . '/wordpress/');
}

require_once(ABSPATH . 'wp-settings.php');
