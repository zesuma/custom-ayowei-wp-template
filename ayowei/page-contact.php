<?php 
/*
Template Name: Contact Template
*/  

get_header();
?>

<main class="contact">
    <header class="header__subpage">
        <h1><?php the_title(); ?></h1>
    </header>
    <section class="section section--light split__color--light">
        <div class="container">
            <div class="content">
                <?php the_content(); ?>
            </div>
        </div>
    </section> 
</main>

<?php get_footer(); ?>
