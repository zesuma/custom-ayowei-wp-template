<?php 
/**
 * 
 * The Blog template for our theme
 * 
 * Displays Blog sections for our theme
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 * @package AYOWEI
 *
 */ 
get_header();
?>
<main class="grid">
    <section class="section section--light blog flex">
        <?php
            // if there are any project posts
            if( have_posts() ):

                //  load posts loop
                while( have_posts() ): the_post();
                                
                    // require the file which is at template-parts/content.php
                    get_template_part( 'template-parts/content', get_post_format() );
                endwhile;
            else:
        ?>
            <p>Nothing to display.</p>
        <?php endif; ?>
    </section>
</main>

<?php get_footer(); ?>
