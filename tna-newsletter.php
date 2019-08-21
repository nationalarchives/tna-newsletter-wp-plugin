<?php
/**
 * Plugin Name:       TNA Newsletter
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the E-Connect API and allow newsletter signups.
 * Version:           0.1
 * Author:            Mihai Diaconita
 * Author URI:        https://nationalarchives.gov.uk
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       tna-newsletter    
 */

 /*
TNA Newsletter is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
TNA Newsletter is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with TNA Newsletter. If not, see {URI to Plugin License}.
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
// Plugin init
add_action( 'plugins_loaded', 'tna_newsletter_plugin_Init' );

// Includes
require_once('inc/api-init.php');
require_once('inc/tna-form-builder.php');
require_once('functions.php');

// WP Hooks
add_action('init', 'wporg_shortcodes_init');

// Enqueue Scripts
add_action( 'wp_enqueue_scripts', 'tna_newsletter_admin_scripts' );

// create custom plugin settings menu
add_action('admin_menu', 'tna_newsletter_create_menu');