<?php



// WA BUTTON STYLE
function fdtwa_style_and_scripts() {

    wp_enqueue_style( 'fdtwa-style', FDTWA_PLUGIN_URL .  'css/wa-style.css' );

}
add_action( 'wp_enqueue_scripts', 'fdtwa_style_and_scripts' );



// WA HTML BUTTON

function fdtwa_html_code() {

    $options = get_option( 'fdtwa_mobile' );

    $number = '';
    if ( isset( $options[ 'number' ] ) ) {
        $number = esc_html( $options[ 'number' ] );
    }

    $label = '';
    if ( isset( $options[ 'label' ] ) ) {
        $label = esc_html( $options[ 'label' ] );
    }


    echo '<p><a class="wa-btn" target="_blank" href="https://wa.me/' . $number . '"><img src="' . FDTWA_PLUGIN_URL . 'img/wa-icon.svg">' . $label .'</a></p>';

}
add_action( 'wp_footer', 'fdtwa_html_code' );