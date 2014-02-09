<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage pw
 * @since pw 0.0.1
 */
?>

<article <?php post_class('column-third fleft') ?> id="post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/Article" role="article">

    <header role="banner">
        <time datetime="<?php echo get_the_time('Y-m-d'); ?>" class="updated fleft post-date"><?php echo get_the_time('d'); ?><br /><span><?php echo get_the_time('F'); ?></span></time>
        <span class="post-category" itemprop="articleSection"><?php the_category(', ') ?></span>
        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
            <?php if ( !has_post_thumbnail() ): ?>
                 <img src="<?php echo get_template_directory_uri(); ?>/images/img-post-default-300x125.png" alt="<?php the_title(); ?>" class="attachment-list-thumb wp-post-image" />
            <?php else: ?>
                <?php the_post_thumbnail('list-thumb'); ?>
            <?php endif; ?>
        </a>

        <h2 class="entry-title" role="heading" aria-level="2" itemprop="name">
            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>

    </header>
    <div class="post-content entry-content">

        <?php the_excerpt(); ?>

    </div><!-- .post-content -->
    <footer class="post-footer" role="contentinfo">
        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>" class="post-footer-link">
            &gt;
        </a>
        <?php wp_link_pages(); ?>
    </footer>
</article><!-- .post -->