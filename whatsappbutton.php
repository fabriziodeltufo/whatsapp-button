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



// Whatsapp Btn Style
function fdtwa_style_and_scripts() {

    wp_enqueue_style( 'fdtwa-style', plugins_url( 'style.css', __FILE__ ) );

}
add_action( 'wp_enqueue_scripts', 'fdtwa_style_and_scripts' );



// WhatsApp Html Button
function fdtwa_html_code() {
    echo '<p><a class="wa-btn" target="_blank" href="https://wa.me/1111222333444"> 
	<svg fill="white" width="30px" height="30px" viewBox="0 0 256 256" id="Flat" xmlns="http://www.w3.org/2000/svg">
	<path d="M128.00049,28A100.02594,100.02594,0,0,0,41.11475,177.53908l-9.0044,31.51661a11.99971,11.99971,0,0,0,14.835,14.834l31.5166-9.00391A100.00677,100.00677,0,1,0,128.00049,28Zm0,192a91.87082,91.87082,0,0,1-46.95264-12.86719,3.99494,3.99494,0,0,0-3.14355-.4082l-33.15723,9.47363a3.99979,3.99979,0,0,1-4.94434-4.94531l9.47266-33.15625a4.00111,4.00111,0,0,0-.4082-3.14355A92.01077,92.01077,0,1,1,128.00049,220Zm50.51123-73.457-20.45947-11.69141a12.01054,12.01054,0,0,0-12.12745.12891l-13.80664,8.28418a44.04183,44.04183,0,0,1-19.38232-19.38281l8.28369-13.80664a12.0108,12.0108,0,0,0,.12891-12.127l-11.69092-20.46A10.91584,10.91584,0,0,0,100,72a32.00811,32.00811,0,0,0-32,31.88086A84.001,84.001,0,0,0,151.999,188h.12012A32.00842,32.00842,0,0,0,184,156,10.913,10.913,0,0,0,178.51172,146.543ZM152.10791,180h-.1084A75.99972,75.99972,0,0,1,76,103.8926,23.997,23.997,0,0,1,100,80a2.89975,2.89975,0,0,1,2.51172,1.457L114.20264,101.918a4.00418,4.00418,0,0,1-.043,4.042l-9.38916,15.64844a3.9987,3.9987,0,0,0-.21826,3.69824,52.04112,52.04112,0,0,0,26.1416,26.1416,3.99707,3.99707,0,0,0,3.69873-.21875L150.04,141.84084a4.006,4.006,0,0,1,4.043-.04394l20.46045,11.69238A2.89712,2.89712,0,0,1,176,156,23.99725,23.99725,0,0,1,152.10791,180Z"/>
  </svg>Chatta con noi.</a></p>';

}
add_action( 'wp_footer', 'fdtwa_html_code' );