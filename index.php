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
        <?php $paged_pw = (get_query_var('paged')) ? (get_query_var('paged') - 1 ) * 10 : 0; ?>
        <?php $posts = get_posts( 'posts_per_page=10&offset=' . $paged_pw ); $i = 0;
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

            <?php if ($i === 6): ?>
                <div id="arroba" class="column-third fleft space-bottom-big">
                    <a id="advertising" href="https://www.eventials.com/?utm_source=pinceladas-da-web&amp;utm_medium=site-link&amp;utm_campaign=animated-banner" title="Eventials - Palestras, Cursos e Eventos On-line" rel="external"><img src="<?php echo get_template_directory_uri(); ?>/src/swf/eventials.jpg" alt="Eventials - Palestras, Cursos e Eventos On-line" title="Eventials - Palestras, Cursos e Eventos On-line"></a>
                </div>
            <?php endif; ?>

        <?php $i++; endforeach;?>

        <div class="clear content-page-buttons">
            <?php posts_nav_link(' ', __('Posts mais recentes', 'pw'), __('Mostrar mais posts', 'pw')); ?>
        </div><!-- .content-page-buttons -->

    </main><!-- #content -->

<?php get_footer(); ?>
