<?php 
/**
 * 
 * The footer for our theme
 * 
 * Displayed after </main>
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 * @package AYOWEI
 *
 */ 
?>

<footer class="footer grid">
    <div class="footer__logo">
        <img src="/wp-content/uploads/2022/02/ayowei.png" alt="footer logo" class="footer__logo--image">
    </div>

    <?php
        wp_nav_menu(
            array(
                'theme_location' => 'ayowei_footer_menu'
            )
        );
    ?>

    <!-- Social Banner -->
    <?php 
        if( is_active_sidebar( 'social-banner' ) ){
            ?> 
            <div class="social">
                <?php dynamic_sidebar( 'social-banner' ); ?>
            </div>
            <?php
        } else {}
    ?>  
    
    <div class="footer__rights">
        <small>
            <address>Cheeseman Courtyard, 20th Street-Cheeseman Avenue Sinkor, Montserrado County - Republic of Liberia</address>
            <p>
                <span class="phone">Company Numbers: +231 886554813 / 0886570517/ 0770570517</span></p>
            <p>
                <span class="copyright">&copy; <?php echo currentYear(); ?> Copyright AYOWEI. All Rights Reserved.</span>
            </p> 
        </small>
    </div>
</footer>

<?php wp_footer(); ?>

    </body>
</html>
