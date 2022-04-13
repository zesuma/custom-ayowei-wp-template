<?php

/**
 * 
 * AYOWEI functions and definitions
 * 
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * 
 * @package AYOWEI
 *
 */  

// includes

include( get_template_directory() . '/inc/acf.php' );
include( get_template_directory() . '/inc/enqueue.php' );
include( get_template_directory() . '/inc/filters.php' );
include( get_template_directory() . '/inc/sidebars.php' );


// MAIN CONFIGURATION FUNCTION //
function ayowei_config(){

    // register nav menus
    register_nav_menus( 
        array(
            'ayowei_main_menu_left'     => 'AYOWEI Main Menu Left Side',
            'ayowei_main_menu_right'    => 'AYOWEI Main Menu Right Side',
            'ayowei_footer_menu'        => 'AYOWEI Footer Menu',
        )
    );

    // image variable for sub page headers
    $args = array(
        'height'     => 350,
        'width'      => 1920
    );

    // add header image to sub pages
    add_theme_support( 'custom-header', $args );

    // add logo
    add_theme_support( 'custom-logo', array( 
        'height'    => 130, 
        'width'     => 120 
    ) );

    // add title tag
    add_theme_support( 'title-tag' );

    // add thumbnail/featured images to posts/pages
    add_theme_support( 'post-thumbnails' );

    // post formats
    // https://wordpress.org/support/article/post-formats/
    add_theme_support( 'post-formats', array( 'video', 'image', 'gallery', 'quote', 'status' ) );

    function exclude_category_posts( $query ) {
        if ( $query->is_home() && $query->is_main_query() ) {
            $query->set( 'cat', '-10, -12' );
        }
    }

    function currentYear(){
        return date('Y');
    }

}

// HOOKS
add_action( 'after_setup_theme', 'ayowei_config', 0 );

add_action( 'pre_get_posts', 'exclude_category_posts' );
