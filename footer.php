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
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', '']);
    _gaq.push(['_trackPageview', document.location.pathname + document.location.search + document.location.hash]);
    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>
</body>
</html>