	<footer class="page-footer layout" role="contentinfo" style="background: url('<?php echo CFS()->get( "footer_background"); ?>') no-repeat; background-size: cover">
        <div class="container-main">
            <div class="left-block">
                <img src="<?php echo get_theme_mod('footer'); ?>" class="logo-footer" alt="logo">
                <p class="footer-content"><?php echo get_theme_mod('footer-content'); ?></p>
                <?php wp_nav_menu( array( 'theme_location' => 'menu-2', 'menu_class' => 'footer-menu', 'container' => false ) ); ?>
            </div>
            <div class="middle-block">
                <h5><?php echo get_theme_mod('middle-headline'); ?></h5>
                <p class="content-middle location">
                    <span class="icon-placeholder"></span>
                    <?php echo get_theme_mod('middle-content'); ?>
                </p>
                <p class="content-middle phone">
                    <span class="icon-handset"></span>
                    <?php echo get_theme_mod('middle-number'); ?>
                </p>
            </div>
            <div class="right-block">
                <h5><?php echo get_theme_mod('right-headline'); ?></h5>
                <form class="form-footer">
                    <input type="text" placeholder="Subscribe our newsletter">
                    <button type="submit"><span class="icon-paper-plane"></span></button>
                </form>
                <ul class="social-holder">
                    <li>
                        <a href="<?php echo get_theme_mod('facebook'); ?>" target="_blank"><span class="icon-facebook-logo"></span></a>
                    </li>
                    <li>
                        <a href="<?php echo get_theme_mod('twitter'); ?>" target="_blank"><span class="icon-twitter"></span></a>
                    </li>
                    <li>
                        <a href="<?php echo get_theme_mod('dribble'); ?>" target="_blank"><span class="icon-dribble-logo"></span></a>
                    </li>
                    <li>
                        <a href="<?php echo get_theme_mod('instagram'); ?>" target="_blank"><span class="icon-instagram-symbol"></span></a>
                    </li>
                    <li>
                        <a href="<?php echo get_theme_mod('google'); ?>" target="_blank"><span class="icon-google-plus-symbol"></span></a>
                    </li>
                    <li>
                        <a href="<?php echo get_theme_mod('right-headline'); ?>" target="_blank"><span class="icon-youtube"></span></a>
                    </li>
                </ul>
            </div>
        </div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
