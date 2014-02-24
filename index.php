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
                    <div id="advertising"></div>
                    <!--[if !IE]> -->
                    <object type="application/x-shockwave-flash" data="<?php echo get_template_directory_uri(); ?>/src/swf/eventials.swf" width="300" height="250">
                    <!-- <![endif]-->
                    <!--[if IE]>
                    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="300" height="135">
                    <param name="movie" value="<?php echo get_template_directory_uri(); ?>/src/swf/eventials.swf" />
                    <!--><!---->
                    <param name="loop" value="true" />
                    <param name="menu" value="false" />
                    <param name="wmode" value="transparent" />
                    <p>Eventials - Palestras, Cursos e Eventos On-line</p>
                    </object>
                    <!-- <![endif]-->
                </div>
            <?php endif; ?>

        <?php $i++; endforeach;?>

        <div class="clear content-page-buttons">
            <?php posts_nav_link(' ', __('Posts mais recentes', 'pw'), __('Mostrar mais posts', 'pw')); ?>
        </div><!-- .content-page-buttons -->

    </main><!-- #content -->

<?php get_footer(); ?>
