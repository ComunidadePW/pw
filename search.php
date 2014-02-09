<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage pw
 * @since pw 0.0.1
 */

get_header(); ?>

    <main id="content" class="column-full content" role="main">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php get_template_part( 'content' ); ?>

        <?php endwhile; ?>

        <div class="clear content-page-buttons">
            <?php posts_nav_link(' ', __('Posts mais antigos', 'pw'), __('Mostrar mais posts', 'pw')); ?>
        </div><!-- .content-page-buttons -->

        <?php else : ?>
            <article class="not-found">
                <h2 title="Not Found">N&atilde;o Encontrado</h2>

                <section>
                    <p class="center">Sorry, but you are looking for something that isn't here.</p>
                    <?php get_template_part('searchform') ; ?>
                </section>
            </article><!-- .post -->
        <?php endif; ?>
        <div class="clear"></div>
    </main><!-- #content -->

<?php get_footer(); ?>