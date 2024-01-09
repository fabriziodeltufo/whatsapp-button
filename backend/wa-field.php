<?php

/*  -----------------------------------------------------------------------------------------------
SETTING BUTTON LABEL
--------------------------------------------------------------------------------------------------- */

function fdtwa_label_cb() {

    $options = get_option( 'fdtwa_mobile' );

    $label = '';

    if ( isset( $options[ 'label' ] ) ) {
        $label = esc_html( $options[ 'label' ] );
    }

    echo '<input REQUIRED type="text" name="fdtwa_mobile[label]" value="' . $label . '" />';

}

add_settings_field(
    // Unique identifier for field
    'fdtwa_label',
    // Field Title
    __( 'Label', 'fdtwa' ),
    // Callback for field markup
    'fdtwa_label_cb',
    // Page to go on
    'fdtwa_page',
    // Section to go in
    'fdtwa_section',
    array( 'class' => 'fdtwa-label' )

);

/*  -----------------------------------------------------------------------------------------------
SETTING MOBILE FIELD
--------------------------------------------------------------------------------------------------- */

function fdtwa_number_cb() {

    $options = get_option( 'fdtwa_mobile' );

    $number = '';

    if ( isset( $options[ 'number' ] ) ) {
        $number = esc_html( $options[ 'number' ] );
    }

    echo '<input REQUIRED type="text" name="fdtwa_mobile[number]" value="' . $number . '" />';

}

add_settings_field(
    // Unique identifier for field
    'fdtwa_number',
    // Field Title
    __( 'Mobile No.', 'fdtwa' ),
    // Callback for field markup
    'fdtwa_number_cb',
    // Page to go on
    'fdtwa_page',
    // Section to go in
    'fdtwa_section',
    array( 'class' => 'fdtwa-number' )

);