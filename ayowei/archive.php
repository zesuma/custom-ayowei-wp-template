
<?php 
/**
 * 
 * The archive template file
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

<main class="archive">
    <header class="header__subpage">
        <?php 
            the_archive_title( '<h1 class="archive__title">', '</h1>' ); 
            the_archive_description();
        ?>   
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
                                get_template_part( 'template-parts/content', 'archive' );
                            endwhile;
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
                    'mid_size'  => 4,
                    'prev_text' => 'Back',
                    'next_text' => 'Onward',
                    ) 
                ); 
                ?>

            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
