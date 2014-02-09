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
                <p class="related-title"><b>Leia também:</b></p>
            </div>

            <?php comments_template('', true); ?>

        <?php endwhile; else: ?>

            <article class="not-found">
                <p><?php _e('Desculpe, nenhum post corresponde aos seus crit&eacute;rios.', 'pw'); ?></p>
            </article>

        <?php endif; ?>
        <div class="clear"></div>
    </main><!-- #content -->

<?php get_footer(); ?>