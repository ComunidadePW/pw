<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #wrap element.
 *
 * @package WordPress
 * @subpackage pw
 * @since pw 0.0.1
 */
?>

<footer id="footer" class="clear white-links" role="contentinfo">
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" id="footer-logo" class="column-sixth content" />

    <?php wp_nav_menu(); ?>
</footer><!-- /footer -->
<?php wp_footer(); ?>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/javascript/all.min.js"></script>
</body>
</html>