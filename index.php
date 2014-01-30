<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage pw
 * @since pw 0.0.1
 */

get_header(); ?>

    <main id="content" class="content column-full" role="main">
        <?php $posts = get_posts( 'posts_per_page=11' ); $i = 0;
        foreach ( $posts as $post ) : setup_postdata( $post ); ?>
            <?php if ($i === 2): ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/adsense-full.png" alt="" id="adsense-full" class="space-bottom-big clear" />
            <?php endif; ?>
            <?php if ($i < 2): ?>
                <?php get_template_part( 'content', 'featured' ); ?>
            <?php else: ?>
                <?php get_template_part( 'content' ); ?>
            <?php endif; ?>


        <?php $i++; endforeach;?>

        <div class="clear">
            <?php posts_nav_link(' &#8212; ', __('&laquo; Anterior', 'pw'), __('Pr&oacute;xima &raquo;', 'pw')); ?>
        </div>

    </main><!-- #content -->

<?php get_footer(); ?>