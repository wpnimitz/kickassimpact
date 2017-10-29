<?php
include('admin-panel/admin.php');

//add_action( 'wp_enqueue_scripts', 'custom_js' );
function custom_js() {
    wp_enqueue_script( 'fixitpress', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery'));
}
