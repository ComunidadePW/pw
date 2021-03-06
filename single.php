<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage pw
 * @since pw 0.0.1
 */

 get_header(); ?>

    <main id="content" class="content column-full single" role="main">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php get_template_part( 'content', 'single' ); ?>
            <?php get_sidebar(); ?>

            <div id="related" class="fleft column-two-thirds">
                <p class="related-title"><b>Leia tamb&eacute;m:</b></p>
                <?php get_template_part( 'related', 'posts' ); ?>
            </div>

            <?php comments_template('', true); ?>

        <?php endwhile; endif; ?>

        <div class="clear"></div>
    </main><!-- #content -->

<?php get_footer(); ?>
