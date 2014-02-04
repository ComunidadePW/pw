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
    <title><?php if (is_home()) {
            echo bloginfo('description'); echo ' | ';
        } elseif (is_404()) {
            echo '404 Not Found'; echo ' | ';
        } elseif (is_category()) {
            wp_title(''); echo ' | ';
         } elseif (is_search()) {
            echo 'Search Results'; echo ' | ';
         } elseif ( is_day() || is_month() || is_year() ) {
            wp_title(''); echo ' | ';
         } else {
            echo wp_title(''); echo ' | ';
         } bloginfo('name')?></title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="author" content="William Bruno" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />

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

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/prettify.css" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />

    <?php wp_head(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/javascript/html5-shiv.js"></script>

</head>
<body <?php body_class(); ?> role="document">
<header id="header" class="column-full content" role="banner">
    <nav id="header-nav">

    </nav><!-- #header-nav -->
    <?php if (is_home()): ?>
        <h1 id="logo" class="column-quarter content">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" />
        </h1>
    <?php else: ?>
        <a href="<?php echo home_url(); ?>" id="logo" class="column-quarter content">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" />
        </a>
    <?php endif; ?>

</header><!-- #header -->