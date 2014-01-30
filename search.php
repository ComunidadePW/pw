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

        <div class="fright">
            <?php posts_nav_link(' &#8212; ', __('&laquo; Anterior', 'pw'), __('Pr&oacute;xima &raquo;', 'pw')); ?>
        </div>

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