<div class="recent-item">
        <div class="recent__img">
            <span class="meta__date-date"><?php echo get_the_date(); ?></span>
            <?php the_post_thumbnail( array( 570, 355 ) ); ?>
        </div><!-- end recent__img -->
        <div class="news__content">
            <h3 class="news__content-title">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h3>
            <ul class="news__content-list">
                <li class="news__content-active__dot">
                Written by <?php the_author_posts_link(); ?>
                </li>
                <?php if( has_category() ): ?>
                    <li>
                        <?php the_category( '  ' ); ?>
                    </li>
                <?php endif; ?>
                <?php if( has_tag() ): ?>
                    <li>
                        <?php the_tags( 'Tags:  ',  ',  ' ); ?>
                    </li>
                <?php endif; ?>
            </ul>
            
            <?php the_excerpt(); ?>
            
            <a class="btn btn--primary btn--small" href="<?php the_permalink(); ?>">Read More</a> 
        </div><!-- end news__content -->
    </div>
