<?php
/**
 * The template for displaying the footer on the site.
 * It does not use tailwind, it's SCSS file can be found at ./assets/src/sass/components/footer.scss.
 * The "Footer Columns" generated by PHP can be configured in functions.php.
 *
 * Contains the footer of the site as well as WP's required code and the closing body and HTML tags.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Status_Glo
 * @since 1.0.0
 */
?>

<!--Start Footer-->
<footer class="footer">
    <div class="footer-left">

        <!--Company Logo-->
        <img src="http://status-glo.local/wp-content/uploads/2021/09/Icon.png">
        <div class="left-inner">
            <!--Company Info-->
            <h3>Fancy Company</h3>
            <p class="phone-number">+1 234-567-8901</p>
        </div>
    </div>

    <div class="footer-right">
        <div class="right-inner">
            <!--Wordpress Generated Link Lists-->
            <?php wp_nav_menu( array( 'theme_location' => 'footer-column-1' ) ); ?>
            <?php wp_nav_menu( array( 'theme_location' => 'footer-column-2' ) ); ?>
        </div>

    </div>
    <div class="footer-bottom">
        <div class="bot-inner">

            <!--Copyright Info-->
            <p>Some Text</p>
            <p>© <?php echo date("Y"); ?> Website Company Name</p>

            <!--Socials, icons from: https://fontawesome.com/ -->
            <div class="footer-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-youtube"></i></a>
        </div>
    </div>
</footer>
<!--End Footer-->


<!--Wordpress Requires This-->
<?php wp_footer(); ?>

</body>
</html>

