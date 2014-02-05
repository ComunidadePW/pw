<?php
/**
 * The template for displaying single content. Used for single.
 *
 * @package WordPress
 * @subpackage pw
 * @since pw 0.0.1
 */
?>


<article <?php post_class('fleft column-two-thirds') ?> id="post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/Article" role="article">

    <header role="banner">
        <span class="vcard author" itemprop="author" itemscope itemtype="http://schema.org/Person">
            <span class="fn" itemprop="name"><?php the_author_link(); ?></span>
        </span> em <?php echo pw_date(); ?>

        <figure class="post-figure">
            <span class="post-category" itemprop="articleSection"><?php the_category(', ') ?></span>
            <?php if ( !has_post_thumbnail() ): ?>
                 <img src="<?php echo get_template_directory_uri(); ?>/images/img-post-default.png" alt="<?php the_title(); ?>" />
            <?php else: ?>
                <?php the_post_thumbnail(); ?>
            <?php endif; ?>

            <h1 class="entry-title" role="heading" aria-level="1" itemprop="name">
                <?php the_title(); ?>
            </h1>
        </figure><!-- .post-figure -->
    </header>
    <div class="post-content entry-content">

        <?php the_content('Leia &raquo; ' . get_the_title() ); ?>

    </div><!-- .post-content -->
    <footer role="contentinfo">
        <?php wp_link_pages(); ?>
        <?php edit_post_link(__('Editar', 'pw')); ?>
    </footer>
</article><!-- .post -->