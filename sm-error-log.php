<?php

/**
 * Plugin Name:       SM Error Log
 * Plugin URI:        https://github.com/msulaimanmisri/SM-Error-Log
 * Description:       This plugin will make your WP_DEBUG turn into `true` and you can check in the dashboard or your `wp-content` folder the error.
 * Version:           1.0
 * Author:            Sulaiman Misri
 * Author URI:        https://github.com/msulaimanmisri
 * Text Domain:       sm-error-log
 * Domain Path:       /languages
 */

defined('ABSPATH') or die("Tak boleh masuk brother");

require 'Classes/ErrorController.php';
