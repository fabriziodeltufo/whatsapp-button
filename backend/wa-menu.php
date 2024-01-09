<?php

// CREATE PLUGIN FORM
function fdtwa_template_cb()
{
    // Double check user capabilities
    if ( !current_user_can('manage_options') ) {
      return;
    }

    include( FDTWA_PLUGIN_DIR . 'backend/template/wa-setup-form.php' ); // call to form
}


//  CREATE PLUGIN MENU / PAGE
function fdtwa_menu()
{
    add_menu_page(
        __( 'Whatsapp Setup Page', 'fdtwa' ), // page title
        __( 'WhatsApp', 'fdtwa' ), // menu title
        'manage_options', // capability
        'fdtwa', // plugin text domain / menu-slug
        'fdtwa_template_cb', // callback fx to output the content (form in the page)
        'dashicons-menu', // plugin menu icon
        0 // menu position in the sidebar
    );
}

add_action( 'admin_menu', 'fdtwa_menu' );

