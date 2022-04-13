<?php 
/*
Template Name: General Template
*/  

get_header();
?>

<main class="subpage">
    <header class="header__subpage">
        <h1><?php the_title(); ?></h1>
    </header>
    <?php 
        if( is_active_sidebar( 'ayowei-sidebar-one' ) ){
            ?> 
            <div class="ayowei__sidebar--one">
                <?php dynamic_sidebar( 'ayowei-sidebar-one' ); ?>
            </div>
            <?php
        } else {}
    ?>  
    <section class="section section--light">
        <div class="container">
            <div class="content">
                <?php the_content(); ?>
            </div>
        </div>
    </section>    
    <section class="section donate">
        <div class="donate--decoration">

            <!-- Donate Sidebar -->
            <?php 
                if( is_active_sidebar( 'sidebar-donate' ) ){
                    dynamic_sidebar( 'sidebar-donate' );
                }
            ?>

        </div>
    </section>
</main>

<?php get_footer(); ?>
