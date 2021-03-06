<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package psv2
 */
?>

</div><!-- end .site-content -->

<footer class="footer" >
    <p class="footer-content">&copy;<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="footer-content-link"><?php bloginfo( 'name' ); ?></a></p>
</footer><!-- end .footer -->

<?php wp_footer(); ?>

<script src="/wp-content/themes/psv2/js/libraries/angular/angular.js"></script>
<script src="/wp-content/themes/psv2/js/libraries/angular-animate/angular-animate.js"></script>
<script src="/wp-content/themes/psv2/js/libraries/angular-touch/angular-touch.js"></script>

<script src="/wp-content/themes/psv2/js/psv2/app.js"></script>
<script src="/wp-content/themes/psv2/js/psv2/directives/responsive-trigger.js"></script>
<script src="/wp-content/themes/psv2/js/psv2/directives/backbutton.js"></script>

<!-- Production Sources Don't Forget Rev Numbers -->
<!--
<script src="wp-content/themes/psv2/js/libraries/all-angular.min.js"></script>
<script src="wp-content/themes/psv2/js/psv2/psv2.js"></script>
-->

</body>
</html>
