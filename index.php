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
        <?php $paged_pw = (get_query_var('paged')) ? (get_query_var('paged') - 1 ) * 11 + 1 : 0; ?>
        <?php $posts = get_posts( 'posts_per_page=11&offset=' . $paged_pw ); $i = 0;
        foreach ( $posts as $post ) : setup_postdata( $post ); ?>
            <?php if ($i === 2): ?>
                <div id="superbanner" class="space-bottom-big clear">
                    <a href="http://www.hostphd.com.br" title="Host PHD" rel="external"><img src="http://www.hostphd.com.br/bhphd.gif" alt="Host PHD" title="Host PHD" /></a>
                </div>
            <?php endif; ?>
            <?php if ($i < 2): ?>
                <?php get_template_part( 'content', 'featured' ); ?>
            <?php else: ?>
                <?php get_template_part( 'content' ); ?>
            <?php endif; ?>


        <?php $i++; endforeach;?>

        <div class="clear content-page-buttons">
            <?php posts_nav_link(' ', __('Posts mais recentes', 'pw'), __('Mostrar mais posts', 'pw')); ?>
        </div><!-- .content-page-buttons -->

    </main><!-- #content -->

<?php get_footer(); ?>
