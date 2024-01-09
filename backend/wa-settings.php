<?php

function fdtwa_settings_cb() {

    include ( FDTWA_PLUGIN_DIR . 'backend/wa-option.php' );

    include ( FDTWA_PLUGIN_DIR . 'backend/wa-section.php' );

    include ( FDTWA_PLUGIN_DIR . 'backend/wa-field.php' );

    // REGISTERING THE SETTINGS //
    register_setting(
        'fdtwa_settings', // form values
        'fdtwa_mobile' //option name
    );

}

add_action( 'admin_init', 'fdtwa_settings_cb' );