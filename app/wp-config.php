<?php

// Autoload Composer dependencies
require_once(dirname(__DIR__) . '/vendor/autoload.php');

// Define base paths
$root_dir = dirname(__DIR__);
$webroot_dir = $root_dir . '/app';
define('WEBROOT_DIR', $webroot_dir);

// Load env variables if .env file exists
$filePath = $root_dir . '/.env';
if( is_readable($filePath) ) {
  $dotenv = new Dotenv\Dotenv($root_dir);
  $dotenv->load();
  $dotenv->required('ENVIRONMENT')->allowedValues(['development', 'staging', 'production']);
}

/**
 * ENVIRONMENT
 */
define('WP_ENV', getenv('ENVIRONMENT')); // development | staging | production

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
define('USE_MYSQL', (bool) getenv('USE_MYSQL'));  // turn it to true if you want to use MySQL instead of SQLite
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
 * Consistently update via composer and disallow file edit via browser
 */
define('AUTOMATIC_UPDATER_DISABLED', true);
define('DISALLOW_FILE_EDIT', true);

/**
 * In most cases you want to run a true cron task
 */
define('DISABLE_WP_CRON', getenv('DISABLE_WP_CRON'));

/**
 * Increase memory
 */
define( 'WP_MEMORY_LIMIT', '128M' );
define( 'WP_MAX_MEMORY_LIMIT', '256M' );

// Optional debug config
if ( WP_ENV == 'development' ):
@ini_set('error_reporting', E_ALL);
@ini_set('display_errors', '1');
@ini_set('log_errors', '1');
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );
define( 'WP_DEBUG_LOG', true );
define( 'SCRIPT_DEBUG', true );
define( 'CONCATENATE_SCRIPTS', false );
endif;


/**
 * Bootstrap WordPress
 */
if (!defined('ABSPATH')) {
  define('ABSPATH', $webroot_dir . '/wordpress/');
}

require_once(ABSPATH . 'wp-settings.php');
