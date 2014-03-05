<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till </header>
 *
 * @package WordPress
 * @subpackage pw
 * @since pw 0.0.1
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php if(function_exists('optimal_title')) { optimal_title(); }; ?><?php bloginfo('name'); ?> - HTML5 Hard Coding and Bullet Proof CSS</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="author" content="William Bruno" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />

    <?php if (is_single()) {
        $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
    ?>
    <meta property="og:url" content="<?php the_permalink() ?>" />
    <meta property="og:title" content="<?php single_post_title(''); ?>" />
    <meta property="og:description" content="<?php echo wp_trim_words(get_excerpt_by_id($post->ID)); ?>" />
    <meta property="og:type" content="article" />
    <?php if ( $featuredImage ): ?>
    <meta property="og:image" content="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" />
    <?php else: ?>
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/img-post-default.png" />
    <?php endif; ?>

    <?php } else { ?>
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/img-post-default.png" />
    <?php } ?>

    <?php if (is_category() || is_tag() || is_month() || is_paged() || is_404()) { ?>
    <link rel="canonical" href= "<?php echo home_url(); ?>"/>
    <meta name="robots" content="noindex, follow" />
    <?php } ?>
    <?php if(is_search()) { ?>
    <meta name="robots" content="noindex, nofollow" />
    <?php }?>
    <?php if ( is_singular() ) { ?>
    <link rel="canonical" href="<?php the_permalink(); ?>" />
    <?php } ?>

    <link rel="dns-prefetch" href="//0.gravatar.com" />
    <link rel="dns-prefetch" href="//img.submarino.com.br" />
    <link rel="dns-prefetch" href="//www.google-analytics.com" />
    <link rel="dns-prefetch" href="//www.facebook.com" />
    <link rel="dns-prefetch" href="//p.twitter.com" />
    <link rel="dns-prefetch" href="//plusone.google.com" />
    <link rel="dns-prefetch" href="//apis.google.com" />
    <link rel="dns-prefetch" href="//fonts.googleapis.com" />
    <link rel="dns-prefetch" href="//platform.linkedin.com" />

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />

    <?php wp_head(); ?>
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/javascript/html5-shiv.js"></script>
    <![endif]-->

</head>
<body <?php body_class(); ?> role="document">
<header id="header" class="column-full content" role="banner">
    <nav id="header-nav" role="navigation">
        <div id="wrap-header-menu" class="fright">
            <form action="<?php echo home_url(); ?>/" role="search" method="get" id="header-search" class="fleft">
                <fieldset class="header-search-inputs fleft">
                    <label class="header-search-label fleft">
                        <input type="text" name="s" id="header-search-input" size="20" value="<?php echo get_search_query(); ?>" />
                    </label>
                    <input type="submit" name="ok" value="ok" class="searchsubmit submit fleft" />
                </fieldset>
                <a href="#wrap-header-menu" data-action="search" id="header-search-label" class="header-action-label fright">Busca</a>
            </form><!-- #header-search -->

            <div id="header-menu" class="fright">
                <?php wp_nav_menu(); ?>
                <a href="#wrap-header-menu" data-action="menu" id="header-menu-label" class="fright header-action-label">Menu</a>
            </div><!-- #header-menu -->
        </div><!-- #wrap-header-menu -->

        <ul id="header-nav-social" class="fleft">
            <li class="fleft social-item social-item-1 hidden-text"><a href="http://feeds2.feedburner.com/pinceladasdaweb" title="RSS Pinceladas da Web">rss</a></li>
            <li class="fleft social-item social-item-2 hidden-text"><a href="https://www.facebook.com/pinceladasdaweb" title="Facebook Pinceladas da Web">facebok</a></li>
            <li class="fleft social-item social-item-3 hidden-text"><a href="https://twitter.com/pinceladasdaweb" title="Twitter Pinceladas da Web">twitter</a></li>
            <li class="fleft social-item social-item-4 hidden-text"><a href="https://github.com/pinceladasdaweb" title="Github Pinceladas da Web">github</a></li>
        </ul><!-- #header-nav-social -->

    </nav><!-- #header-nav -->
    <?php if (is_category() || is_tag() || is_month() || is_paged() || is_page() || is_single() || is_search() || is_404()): ?>
        <a href="<?php echo home_url(); ?>" id="logo" class="column-quarter content" rel="index">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" />
        </a>
    <?php else: ?>
        <h1 id="logo" class="column-quarter content">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" />
        </h1><!-- #logo -->
    <?php endif; ?>

</header><!-- #header -->
