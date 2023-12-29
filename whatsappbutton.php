<?php
/*
* Plugin Name:       WhatsApp Button
* Plugin URI:        https://github.com/fabriziodeltufo/whatsapp-button
* Description:       WhatsApp Button in footer.
* Version:           1.0.0
* Requires at least: 6.4.2
* Requires PHP:      7.4.33
* Author:            Fabrizio Del Tufo
* Author URI:        https://github.com/fabriziodeltufo
* License:           GPL v2 or later
* License URI:       https://www.gnu.org/licenses/gpl-2.0.html
* Text Domain:       fdtwa
* Domain Path:       /languages
*/

/* Security  */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
    // Exit if accessed directly
}

define( 'WPPLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'WPPLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Whatsapp Btn Style

function fdtwa_style_and_scripts() {

    wp_enqueue_style( 'fdtwa-style', WPPLUGIN_URL .  'css/style.css' );

}
add_action( 'wp_enqueue_scripts', 'fdtwa_style_and_scripts' );

// WhatsApp Html Button

function fdtwa_html_code() {
    echo '<p><a class="wa-btn" target="_blank" href="https://wa.me/1111222333444"><img src="' . WPPLUGIN_URL . 'img/wa-icon.svg">Chatta con noi.</a></p>';

}
add_action( 'wp_footer', 'fdtwa_html_code' );


// 'img/wa-icon.svg'