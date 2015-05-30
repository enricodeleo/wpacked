<?php

// Autoload Composer dependencies
require_once(dirname(__DIR__) . '/vendor/autoload.php');

// Load env variables
Dotenv::load(dirname(__DIR__));
Dotenv::required('ENVIRONMENT', array('development', 'staging', 'production'));

$root_dir = dirname(__DIR__);

$webroot_dir = $root_dir . '/app';
define('WEBROOT_DIR', $webroot_dir);

/**
 * ENVIRONMENT
 */
define('WP_ENV', getenv('WP_ENV')); // development | staging | production

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
define('DB_NAME', 'dbname');
define('DB_USER', 'dbuser');
define('DB_PASSWORD', 'dbpassword');
define('DB_HOST', 'localhost');
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
define('AUTH_KEY',         't(;_#gm0;-C{$a`I$K)>v*%Pz-80U-ZN0?dfuNc)W0>4KvJ&.1((~ku-6.XUXj0_');
define('SECURE_AUTH_KEY',  'd=e_HInEOsloj+JMz*OkNAP~JTX4(v&=tk;Q /2Ol+s#+C,L#mLz7gyR0$I:bE@d');
define('LOGGED_IN_KEY',    '9J{!b!reZx+L2SWjKR7. X3JK66jG{-nf^|AA$xp~DD69K<B/)t;]Ng=37P5s-GC');
define('NONCE_KEY',        '0O8[1z]/[G5PIQ6S/F!8F@j)al9[y%F}v_m~[/6X(pH4g7%cmTcH)qJVA~|.zOrK');
define('AUTH_SALT',        'm~|^<ab)VdD9IMCZa0Z? ]pnQjn]k6[HUR!FmE8d8RGuDRb(KQCY<<cLQWDUYp<&');
define('SECURE_AUTH_SALT', 'fKu~[oqY[20xAR|;S^*1x*?Y0>h~;`CNenxd7^E!@<jnnpRf%zD%-l(8EVvcrGs{');
define('LOGGED_IN_SALT',   'i]O`J02T|B<?|;p1yecUZWD2sdGYur6f=&&MI8IYLHBQs~MUTpP-,+9jMp5ZJ!kx');
define('NONCE_SALT',       '3S{O_/tYOPGB^s-},?$I<{5[A:%N75f!-h*lx.emj|B$U8h3)baV8i/0fX<oc=|d');

/**
 * Custom Settings
 */
define('AUTOMATIC_UPDATER_DISABLED', true);
define('DISABLE_WP_CRON', false);
define('DISALLOW_FILE_EDIT', true);

/**
 * Increase memory
 */
define( 'WP_MEMORY_LIMIT', '128M' );
define( 'WP_MAX_MEMORY_LIMIT', '256M' );

// Optional debug config
@ini_set('error_reporting', E_ALL);
@ini_set('display_errors', '1');
@ini_set('log_errors', '1');
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );
define( 'WP_DEBUG_LOG', true );


// define( 'SCRIPT_DEBUG', true );
// define( 'CONCATENATE_SCRIPTS', false );
// define( 'AUTOMATIC_UPDATER_DISABLED', true );
// define( 'WP_AUTO_UPDATE_CORE', false );

/**
 * Bootstrap WordPress
 */
if (!defined('ABSPATH')) {
  define('ABSPATH', $webroot_dir . '/wordpress/');
}

require_once(ABSPATH . 'wp-settings.php');
