
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

<main class="error-404">
    <header class="header__subpage"> 
        <h1>Page not found</h1>
        <p>Unfortunately, the page you tried to reach does not exist on this site!</p>
    </header>
    <section class="section section--light">
        <div class="container">  
            <div class="content">
                <div class="error">
                    <p>How about doing a search?</p>
                    <?php get_search_form(); ?>
                    <?php the_widget( 'WP_Widget_Recent_Posts', array( 'title' => 'Latest Posts', 'number' => 3 ) ); ?>
                </div>
            </div>
        </div> 
    </section>
</main>

<?php get_footer(); ?>
