<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage pw
 * @since pw 0.0.1
 */

get_header(); ?>

    <main id="content" class="content column-full" role="main">
        <article class="error404 post">
            <header>
                <hgroup>
                    <h1><?php _e('Error 404 - Not Found', 'blank'); ?></h1>
                    <h2><?php _e('The page you were looking for has either been deleted or moved.', 'blank'); ?></h2>
                </hgroup>
            </header>
            <div class="post-content">
                <?php _e('Do you want to search for it', 'blank'); ?>? <br />
            </div><!-- .post-content -->
            <footer>
                <?php get_template_part('searchform') ; ?>
            </footer>
        </article>
    </main><!-- /content -->
<?php get_footer(); ?>