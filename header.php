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

<title><?php wp_title( '|', TRUE, 'left' ); ?></title>

<!-- generic -->
<meta name="description" content="PowerSeal USA, Your Powersports Cylinder Repair Source">
<meta name="author" content="Robin Hoover - MooseDog Studios - Stowe, VT - www.moosedog.io - robin.hoover@gmail.com">
<meta name='robots' content='index,follow'>


<!-- Mobile Stuff -->
<meta name="HandheldFriendly" content="True">
<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">

<!-- apple stuff -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="PowerSealUSA">
<meta name='apple-touch-fullscreen' content='yes'>
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<!-- because microsoft exists -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="msapplication-TileImage" content="images/apple-touch-icon-144x144.png">
<meta name="msapplication-TileColor" content="#222222">
<meta http-equiv="cleartype" content="on">

<!-- icons and Launch Image -->
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
<link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="57x57" href="images/apple-touch-icon-57x57.png">
<link rel="apple-touch-startup-image" href="images/startup.png">

<!-- icon actually for android -->
<link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen, projection" />

<?php wp_head(); ?>

</head>

<body ng-app="psv2App">

    <span class="hero-banner" data-rh-responsive></span>


    <header class="header">
        <p class="back-button" data-back-button>Back</p>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="title"></a>
        <p class="menu-button" ng-click="moveme = 'navmove' ">Menu</p>
    </header><!-- end .header -->

    <?php
        //courtesy of:  http://zoerooney.com/blog/tutorials/removing-list-items-wordpress-menus/
        //combine with addition to functions.php and tweaked by yours truly
        // first let's get our nav menu using the regular wp_nav_menu() function with special parameters
        $cleanermenu = wp_nav_menu( array(
            'theme_location' => 'primarymenu', // we've registered a theme location in functions.php
            'container' => false, // this is usually a div outside the menu ul, we don't need it hence false
            'menu_id' => '', //added by me
            'menu_class' => 'nav-menu', //added by me
            'items_wrap' => '<nav class="%2$s" ng-class="moveme"><p class="close-menu" ng-click="moveme=\' \' ">Close Menu</p>%3$s</nav>', // replacing the ul with nav, remove id too
            'echo' => false, // don't display it just yet, instead we're storing it in the variable $cleanermenu
        ) );
        // Find the closing bracket of each li and the opening of the link (><a), then all instances of "<li"
        $find = array('><a','<li');
        // Replace the ><a with nothing (a.k.a. delete) and the "<li" with "<a"
        $replace = array('','<a');
        echo str_replace( $find, $replace, $cleanermenu );
    ?><!-- end .nav-menu -->

    <div class="action">
        <h2 class="action-lede">Your Performance Headquarters for NikaSeal Cylinder Plating and Repair</h2>
        <a href="#" class="action-button action-workorder">Download Work Order</a>
        <a href="http://ec2-54-86-240-234.compute-1.amazonaws.com/?page_id=13" class="action-button action-contact">Contact Information</a>
        <a href="#" class="action-button action-dealer">Download Dealer Form</a>
    </div>

    <div class="content">
