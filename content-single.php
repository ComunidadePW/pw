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

        <figure class="post-figure space-bottom-small">
            <span class="post-category" itemprop="articleSection"><?php the_category(', ') ?></span>
            <?php if ( !has_post_thumbnail() ): ?>
                 <img src="<?php echo get_template_directory_uri(); ?>/images/img-post-default.png" alt="<?php the_title(); ?>" />
            <?php else: ?>
                <?php the_post_thumbnail(); ?>
            <?php endif; ?>
        </figure><!-- .post-figure -->

        <h1 class="entry-title" role="heading" aria-level="1" itemprop="name"><?php the_title(); ?></h1>
    </header>
    <div class="post-content entry-content space-bottom">

        <?php the_content('Leia &raquo; ' . get_the_title() ); ?>

    </div><!-- .post-content -->

    <footer class="post-footer" role="contentinfo">
        <div class="post-authorbox overflow space-bottom">
            <p class="post-footer-title"><b>Escrito por:</b></p>
            <span class="post-authorbox-img fright space-left">
                <?php if (function_exists('get_avatar')) { echo get_avatar(get_the_author_meta('user_email'), '120'); }?>
            </span><!-- .post-authorbox-img -->
            <div class="post-authorbox-info">
                <h3 class="post-authorbox-info-name"><?php the_author_meta('display_name'); ?></h3>
                <p class="post-authorbox-info-bio"><?php the_author_meta('description'); ?></p>
            </div><!-- .post-authorbox-info -->
        </div><!-- .post-authorbox -->

        <div class="post-share overflow">
            <p class="post-footer-title"><b>Gostou? Compartilhe!</b></p>
            <ul class="overflow">
                <li class="fleft space-right-small"><div class="g-plusone" data-size="tall" data-href="<?php the_permalink() ?>"></div></li>
                <li class="fleft space-right-small"><div class="fb-like" data-href="<?php the_permalink() ?>" data-send="false" data-layout="box_count" data-width="140" data-show-faces="false"></div></li>
                <li class="fleft space-right-small"><script type="IN/Share" data-url="<?php the_permalink() ?>" data-counter="top"></script></li>
                <li class="fleft"><a href="https://twitter.com/share" class="twitter-share-button" data-count="vertical" data-url="<?php the_permalink() ?>" data-text="<?php the_title(); ?>">Tweet</a></li>
            </ul>
        </div><!-- .post-share -->

        <?php wp_link_pages(); ?>
        <?php edit_post_link(__('Editar', 'pw')); ?>
    </footer>
</article><!-- .post -->