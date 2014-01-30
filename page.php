<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage pw
 * @since pw 0.0.1
 */

get_header(); ?>

    <main id="content" class="column-full content" role="main">
        <?php if (have_posts()) : while (have_posts()) : the_post();?>

            <?php get_template_part( 'content', 'page' ); ?>

        <?php endwhile; else: ?>

            <article class="not-found">
                <p><?php _e('Desculpe, nenhum post corresponde aos seus crit&eacute;rios.', 'pw'); ?></p>
            </article><!-- .not-found -->

        <?php endif; ?>
        <div class="clear"></div>
    </main><!-- #content -->

<?php get_footer(); ?>