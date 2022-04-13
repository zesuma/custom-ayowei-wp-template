<?php 
/**
 * 
 * The Homepage template for our theme
 * 
 * Displays homepage sections for our theme
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 * @package AYOWEI
 *
 */ 

get_header(); 
?>

<main class="grid">
    <section class="section carousel">

        <?php 
                
            if( is_active_sidebar( 'carousel-section' ) ){
                dynamic_sidebar( 'carousel-section' );
            }
                
        ?>
        
    </section>
    <section class="section__1">
        
    </section>
    <section class="section hero flex">
        <div class="box flex">
            <!-- Hero Left -->
            <header class="hero--header">
                <?php get_sidebar( 'hero' ); ?>
            </header>
        </div>
        <div class="box">
            <!-- Hero Right -->
            <?php 
                if( is_active_sidebar( 'sidebar-hero-right' ) ){
                    dynamic_sidebar( 'sidebar-hero-right' );
                }
            ?>

            <header class="hero--header">
                <?php get_sidebar( 'hero' ); ?>
            </header>
            
        </div>
    </section>
    <section class="section blako bg__accent--lt">

        <?php 
                
            if( is_active_sidebar( 'blako-section' ) ){
                 dynamic_sidebar( 'blako-section' );
            }
                
        ?>
            
    </section>
    <section class="section team grid">
        <header class="header--subheader">
            <h2 class="heading-secondary">
                Meet Our Board Members
            </h2>
            <p class="team__desc">Our Board of Directors oversees and supports 
                AYOWEI executive committee meetings, programs, advocacy, education, and fundraising efforts.</p>
        </header>
        <div class="team__box flex">

            <?php 
                $args = array(
                    'post_type'           => 'post',
                    'posts_per_page'      => 6,
                    'category__in'        => array(7),
                    'category__not_in'    => array(1,3,4,5,6,8,12),
                    'offset'              => '0',
                );

                $team = new WP_Query( $args );

                if( $team->have_posts() ):
                    while( $team->have_posts() ): $team->the_post();
                ?>
                <div class="box">
                    <?php get_template_part( 'template-parts/content', 'team' ); ?>
                </div>
                <?php
                endwhile;
                    wp_reset_postdata();
                endif;

            ?>
            
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
