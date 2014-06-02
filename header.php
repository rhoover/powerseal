<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package psv2
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">

<title><?php wp_title( '|', true, 'left' ); ?></title>

<!-- generic -->
<meta name="description" content="PowerSeal USA, Your Powersports Cylinder Repair Source">
<meta name="author" content="Robin Hoover - MooseDog Studios - Stowe, VT - www.moosedog.io - robin.hoover@gmail.com">
<meta name='robots' content='index,follow'>


<!-- Mobile Stuff -->
<meta name="HandheldFriendly" content="True">
<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">

<!-- apple stuff -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="Vermont Brewers">
<meta name='apple-touch-fullscreen' content='yes'>
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<!-- because microsoft exists -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="msapplication-TileImage" content="images/apple-touch-icon-144x144-precomposed.png">
<meta name="msapplication-TileColor" content="#222222">
<meta http-equiv="cleartype" content="on">
<!-- icons -->
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
<link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="57x57" href="images/apple-touch-icon-57x57.png">

<!-- icon actually for android -->
<link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen, projection" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'psv2' ); ?></a>

    <header id="masthead" class="site-header" role="banner">
        <div class="site-branding">
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
        </div>

        <nav id="site-navigation" class="main-navigation" role="navigation">
            <button class="menu-toggle"><?php _e( 'Primary Menu', 'psv2' ); ?></button>
            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </nav><!-- #site-navigation -->
    </header><!-- #masthead -->

    <div id="content" class="site-content">
