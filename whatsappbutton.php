<?php
/*
* Plugin Name:       WhatsApp Button
* Plugin URI:        https://wewebby.gumroad.com/
* Description:       WhatsApp Button in bottom page position.
* Version:           1.0.0
* Requires at least: 6.4.2
* Requires PHP:      7.4.33
* Author:            WeWebby.com
* Author URI:        https://wewebby.com
* License:           GPL v2 or later
* License URI:       https://www.gnu.org/licenses/gpl-2.0.html
* Text Domain:       fdtwa
* Domain Path:       /languages
*/

/* SECURITY  */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
    // Exit if accessed directly
}

define( 'FDTWA_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'FDTWA_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );


// PLUGIN FRONT END
include (FDTWA_PLUGIN_DIR . 'frontend/wa-html-css.php');
// include (FDTWA_PLUGIN_DIR . 'backend/wa-option.php');
include (FDTWA_PLUGIN_DIR . 'backend/wa-menu.php');
// include (FDTWA_PLUGIN_DIR . 'backend/wa-section.php');
// include (FDTWA_PLUGIN_DIR . 'backend/wa-field.php');
include (FDTWA_PLUGIN_DIR . 'backend/wa-settings.php');

