<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Twelve already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage pw
 * @since pw 0.0.1
 */

get_header(); ?>

    <main id="content" class="content column-full archive" role="main">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

              <?php get_template_part( 'content' ); ?>

        <?php endwhile; else: ?>

            <article class="not-found">
                <p><?php _e('Desculpe, nenhum post corresponde aos seus crit&eacute;rios.', 'pw'); ?></p>
            </article>

        <?php endif; ?>

        <div class="clear content-page-buttons">
            <?php posts_nav_link(' ', __('Posts mais antigos', 'pw'), __('Mostrar mais posts', 'pw')); ?>
        </div><!-- .content-page-buttons -->

    </main><!-- #content -->
<?php get_footer(); ?>