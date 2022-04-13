<?php 
 
/*
Template Name: Donation Template
*/  

get_header(); 
?>

<main class="grid donation">
    <section class="section hero flex">
        <div class="box flex">
            <!-- Donation Page Hero Left -->
            <?php 
                if( is_active_sidebar( 'sidebar-donation-hero-left' ) ){
                    dynamic_sidebar( 'sidebar-donation-hero-left' );
                }
            ?>
        </div>
        <div class="box">
            <!-- Donation Page Hero Right -->
            <header class="hero--header">
                <?php 
                    if( is_active_sidebar( 'sidebar-donation-hero-right' ) ){
                        dynamic_sidebar( 'sidebar-donation-hero-right' );
                    }
                ?>
            </header>
        </div>
    </section>
     
        <?php 
            if( is_active_sidebar( 'promo-banner' ) ){
                ?> 
                <div class="promo__banner">
                    <?php dynamic_sidebar( 'promo-banner' ); ?>
                </div>
                <?php
            } else {}
        ?>  
    </div>
    <section class="section section--light">
        <div class="container">
            <div class="content">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
    
</main>

<?php get_footer(); ?>
