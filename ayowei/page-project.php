
<?php 
 
/*
Template Name: Project Template
*/  

get_header(); 
?>

<main class="projects">
    <header class="header__subpage">
        <?php 
            the_title( '<h1 class="projects__title">', '</h1>' ); 
        ?>   
    </header>
    <?php 
        if( is_active_sidebar( 'ayowei__sidebar--one' ) ){
            ?> 
            <div class="ayowei__sidebar--one">
                <?php dynamic_sidebar( 'ayowei-sidebar-one' ); ?>
            </div>
            <?php
        } else {}
    ?>  
    <section class="section--light">
        <div class="container container__sidebar">  
            <div class="content flex col--2">
                <?php 
                    $args = array(
                        'post_type'           => 'post',
                        'category__in'        => array(6),
                        'category__not_in'    => array(1,7,8,10,12),
                        'offset'              => '0',
                    );

                    $projects = new WP_Query( $args );

                    if( $projects->have_posts() ):
                        while( $projects->have_posts() ): $projects->the_post();
                    ?>
                        <?php get_template_part( 'template-parts/content', 'projects' ); ?>
                    <?php
                    endwhile;
                        wp_reset_postdata();
                    endif;
                ?>
            </div>
            <!-- Page Sidebar -->
            <aside class="container__sidebar--right">
                <?php 
                    if( is_active_sidebar( 'sidebar-3' ) ){
                        dynamic_sidebar( 'sidebar-3' );
                    }
                ?>
            </aside>
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
    <?php 
        if( is_active_sidebar( 'ayowei__sidebar--two' ) ){
            ?> 
            <div class="ayowei__sidebar--two">
                <?php dynamic_sidebar( 'ayowei-sidebar-two' ); ?>
            </div>
            <?php
        } else {}
    ?>  
</main>

<?php get_footer(); ?>


