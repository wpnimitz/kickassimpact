<?php 

add_action( 'admin_menu', 'admin_panel_register' );

function admin_panel_register()
{
    add_menu_page(
        'Kick Ass Impact Superb Website Design',	// page title
        'Kickass Support',     						// menu title
        'manage_options',							// capability
        'kickass-support',							// menu slug
        'admin_panel_render'						// callback function
    );
}


function admin_panel_render()
{
    global $title;

    print '<div class="wrap">';
    print "<h1>$title</h1>";

    $file = get_stylesheet_directory_uri() . "/admin-panel/included.html";


    if ( file_exists( $file ) )
        echo $file;

    print "<p class='description'>Included from <code>$file</code></p>";

    print '</div>';
}


