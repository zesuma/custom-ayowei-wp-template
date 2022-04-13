<div class="card">
    <figure>
        <?php 
        if ( has_post_thumbnail() ):
            the_post_thumbnail( array( 275, 275 ) );
        endif;
        ?>
    </figure>
    <h3 class="heading-tertiary">
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </h3>
    <?php the_excerpt(); ?>
</div>
