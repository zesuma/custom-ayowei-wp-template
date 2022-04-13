<?php get_header(); ?>

<main>
    <section class="section section--light">
        <div class="container">

            <?php 
                
                while( have_posts() ):
                    the_post();
                    get_template_part( 'template-parts/content', 'single' );
                endwhile;

                if( comments_open() || get_comments_number() ):
                    comments_template();
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
