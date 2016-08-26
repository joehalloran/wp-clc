<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ldnclc_theme
 */

?>

	<footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 hidden-xs">
                    <img style="max-height: 40px;" class="img-responsive footer-logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/EDTLogo-140x40.png" >
                    <img style="max-height: 40px;" class="img-responsive footer-logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/LdnCLCLogo-70x70.png">
                    <p class="small footer-text">&copy; London Connected Learning Centre 2016</p>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <p class="footer-text">
                        London Connected Learning Centre<br>Rectory Grove<br>London<br>SW4 0EL
                    </p>
                </div>
                <div class="col-sm-4">
                    <p class="footer-text"><a href="mailto:info@londonclc.org.uk" class="footer-text">info@londonclc.org.uk</a><br>0207 720 7514</p>
                    <a href="http://twitter.com/LdnCLC" target="_blank">
                        <i class="fa fa-twitter footer-social-logo"></i>
                    </a>
                    <a href="http://vimeo.com/londonclc" target="_blank">
                        <i class="fa fa-vimeo footer-social-logo"></i>
                    </a> 
                </div>
                <div class="col-sm-4 visible-xs" style="margin-top: 10px;">
                    <img style="max-height: 40px;" class="img-responsive footer-logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/EDTLogo-140x40.png" >
                    <img style="max-height: 40px;" class="img-responsive footer-logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/LdnCLCLogo-70x70.png">
                    <p class="small footer-text">&copy; London Connected Learning Centre 2016</p>
                </div>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>

</body>
</html>