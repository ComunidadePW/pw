<?php
$orig_post = $post;
global $post;
$tags = wp_get_post_tags($post->ID);

if ($tags) {
$tag_ids = array();
foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
$args = array(
    'tag__in' => $tag_ids,
    'post__not_in' => array($post->ID),
    'posts_per_page'=> 4, // Number of related posts to display.
    'ignore_sticky_posts'=> 1
);

$my_query = new wp_query( $args );
while( $my_query->have_posts() ) {$my_query->the_post();
?>

<article <?php post_class('related-post column-third fleft') ?> id="post-<?php the_ID(); ?>">

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
</article>

<?php }}
    $post = $orig_post;
    wp_reset_query();
?>