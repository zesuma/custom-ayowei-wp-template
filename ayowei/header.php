<?php 
/**
 * 
 * The header for our theme
 * 
 * Displays all of the <head> section and everything up until <main>
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 * @package AYOWEI
 *
 */ 
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <!-- Sidebar Banner  -->
    <?php 
        if( is_active_sidebar( 'sidebar-banner' ) ){
            dynamic_sidebar( 'sidebar-banner' );
        }
    ?>

    <header class="header header--primary">
        <nav class="navbar">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'ayowei_main_menu_left'
                    )
                );
            ?>
        </nav>
        <div class="header__logo--box">
            <?php the_custom_logo(); ?>
        </div>
        <nav class="navbar">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'ayowei_main_menu_right'
                    )
                );
            ?>
            <a href="/donate" class="btn btn--primary">Donate</a>
        </nav>

        <!-- Hamburger - only shows on mobile -->
        <div class="hamburger">
            <span class="dashicons dashicons-chart-bar"></span>
        </div>
    </header>
