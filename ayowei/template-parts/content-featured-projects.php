        <figure class="projects__figure">
        <?php 
            if ( has_post_thumbnail() ):
                the_post_thumbnail( array( 275, 275 ) );
            endif;
        ?>
        </figure>
        
        <h3 class="heading-tertiary"><?php the_title(); ?></h3>
        <?php the_excerpt(); ?>
        <a class="btn btn--primary btn--small" href="<?php the_permalink(); ?>">Read More</a>        
