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
        <time datetime="<?php the_time('Y-m-d'); ?>" class="updated fleft post-date"><?php the_time('d'); ?><br /><span><?php the_time('M'); ?></span></time>
        <span class="post-category" itemprop="articleSection"><?php the_category(', ') ?></span>
        <a class="space-bottom-small" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
            <?php 
                if ( !has_post_thumbnail() ):
                    $thumb_src = get_template_directory_uri(). '/images/img-post-default-300x125.png';
                else:
                    $thumb_src = preg_replace('/.*src="([^"]+)".*/', '$1', get_the_post_thumbnail(get_the_ID(), 'list-thumb'));
                endif;
            ?><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="<?php echo $thumb_src; ?>" alt="<?php the_title(); ?>" class="attachment-list-thumb wp-post-image" />
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
</article><!-- .post -->