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
define('USE_MYSQL', false);
define('DB_NAME', 'dbname');
define('DB_USER', 'dbuser');
define('DB_PASSWORD', 'dbpassword');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

/**
* SQLITE DB
*/
define('DB_DIR', $webroot_dir . '/app/db/');
define('DB_FILE', 'memory.sqlite');

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
define('DISABLE_WP_CRON', true);
define('DISALLOW_FILE_EDIT', true);

/**
 * Increase memory
 */
define( 'WP_MEMORY_LIMIT', '128M' );
define( 'WP_MAX_MEMORY_LIMIT', '256M' );

// Optional debug config
@ini_set( 'log_errors', 'Off' );
@ini_set( 'display_errors', 'On' );
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', true );
// define( 'SCRIPT_DEBUG', true );
// define( 'CONCATENATE_SCRIPTS', false );

/**
 * Bootstrap WordPress
 */
if (!defined('ABSPATH')) {
  define('ABSPATH', $webroot_dir . '/wordpress/');
}

require_once(ABSPATH . 'wp-settings.php');
