<?php


add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}

function register_my_menus() {
    register_nav_menus(
        array(
            'news-menu' => __( 'News Menu' ),
            'sport-menu' => __( 'sport Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );

wp_enqueue_style( 'style', get_stylesheet_uri() );
