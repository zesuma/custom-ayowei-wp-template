<?php 
/**
 * 
 * The main template file
 * 
 * This is the most generic template file in WordPress themes
 * and one of the two requires files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches the query.
 * E.g., it puts together the home page when no home.php file exists.
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package AYOWEI
 *
 */ 
get_header(); 
?>

<main>
    <header class="header__subpage">
        <h1>Our voice</h1>
    </header>
    <section class="section--light">
        <div class="container">
            <div class="content flex col--2">

                <?php
                
                    // if there are any project posts
                    if( have_posts() ):

                    //  load posts loop
                    while( have_posts() ): the_post();
                                        
                    // require the file which is at template-parts/content.php
                        get_template_part( 'template-parts/content', get_post_format() );
                    endwhile;

                ?>
                <?php
                    else:
                ?>
                    <p>Nothing to display.</p>
                <?php endif; ?>
            </div>
        </div> 
        <div class="container">
            <div class="pagination">
                                
                <?php the_posts_pagination( 
                    array(
                    'mid_size'  => 2,
                    'prev_text' => 'Back',
                    'next_text' => 'Onward',
                    ) 
                ); 
                ?>

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
