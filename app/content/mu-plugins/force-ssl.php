<?php

/**
 * Plugin Name: Force SSL
 * Description: Force SSL if defined among env vars
 * Version: 1.0.0
 * Author: Enrico Deleo
 * Author URI: https://enricodeleo.com/
 * License: MIT License
 */

/**
 * If this file is called directly, abort.
 */
if (!defined('ABSPATH')) {
  die('Direct access is forbidden.');
}

if (constant('FORCE_SSL')) {
  add_action('template_redirect', 'ed_force_ssl');
  function ed_force_ssl()
  {
    if (!is_ssl()) {
      wp_redirect('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], 301);
      exit();
    }
  }
}
