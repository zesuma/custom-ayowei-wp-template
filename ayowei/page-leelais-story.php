<?php 
/**
 * 
 * The Leelai's Page template for our theme
 * 
 * Displays Leelai's sections for our theme
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 * @package AYOWEI
 *
 */ 

get_header(); 
?>
<main class="leelai">
    <section class="section hero flex">
        <div class="box flex">
            <!-- AYOWEI Hero Left -->
            <header class="hero--header">
                <?php 
                    if( is_active_sidebar( 'leelai-hero-left' ) ){
                        dynamic_sidebar( 'leelai-hero-left' );
                    }
                ?>
            </header>
        </div>
        <div class="box">
            <!-- AYOWEI Hero Right -->
            <?php 
                if( is_active_sidebar( 'leelai--hero-right' ) ){
                    dynamic_sidebar( 'leelai--hero-right' );
                }
            ?>
        </div>
    </section>
    <section class="section section--light">
        <div class="container">
            <div class="content">
                <?php the_content(); ?>
            </div>
        </div>
    </section>    
    <section class="gallery">
        <header class="gallery__header">
            <h2 class="heading-secondary">
                Leelai's Gallery
            </h2>
        </header>
        <div class="gallery__box grid">

            <?php 
                $args = array(
                    'post_type'           => 'post',
                    'posts_per_page'      => 1,
                    'category__in'        => array(5),
                    'category__not_in'    => array(1,3,4,6,7,8,10,12),
                    'offset'              => '0',
                );

                $leelai_gallery = new WP_Query( $args );

                if( $leelai_gallery->have_posts() ):
                    while( $leelai_gallery->have_posts() ): $leelai_gallery->the_post();
                ?>
                    <?php get_template_part( 'template-parts/content', 'gallery' ); ?>
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
