<?php
function mytheme_register_menus() {
    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu', 'mytheme' ),
            'footer'  => __( 'Footer Menu', 'mytheme' )
        )
    );
}
add_action( 'after_setup_theme', 'mytheme_register_menus' );


