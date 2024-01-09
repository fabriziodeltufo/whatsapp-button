<?php

// SETTING THE OPTIONS WHERE TO SAVE THE VALUE

// If option is not present, it is created in wp-options table.

if ( !get_option( 'fdtwa_mobile' ) ) {
    add_option( 'fdtwa_mobile' ) ;
    $options = array(
        'number' => '+112233445566',
        'label' => 'Call Now !'
    );

    update_option( 'fdtwa_mobile', $options );

}