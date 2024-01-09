<?php
// SETTING SECTION : Define ( at least ) one section

add_settings_section(
    // Unique identifier for the section
    'fdtwa_section',
    // Section Title
    __( 'Set the parameters : ', 'fdtwa' ),
    // Callback for an optional description
    'fdtwa_section_cb',
    // Admin page to add section to
    'fdtwa_page'
);


function fdtwa_section_cb() {
    esc_html_e( 'Insert the mobile number to call / chat and the label for the button.', 'fdtwa' );
}
