<?php 
/**
 * 
 * The AYOWEI template for our theme
 * 
 * Displays AYOWEI sections for our theme
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 * @package AYOWEI
 *
 */ 

get_header(); 
?>

<main class="grid ayowei">
    <header class="header__subpage">
        <h1><?php the_title(); ?></h1>
    </header>

    <section class="section section--light">
        <div class="container">
            <div class="content">
                <?php the_content(); ?>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
