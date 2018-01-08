<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="http://pjwalker.net/static/custom.css" rel="stylesheet" type="text/css">
<link href="http://pjwalker.net/static/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="http://pjwalker.net/static/font-awesome.min.css" rel="stylesheet" type="text/css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>
        
        <div id="topnav" class="navbar navbar-light">
           <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#panel1">Work</a></li>
                <li class="nav-item"><a class="nav-link" href="#panel2">Skills</a></li>
                <li class="nav-item"><a class="nav-link" href="#panel4">Contact</a></li>
           </ul>
        </div>

     <header id="masthead" class="site-header" role="banner">
       <div class="row title"> 
            <h2>PROFESSIONAL WEB DEVELOPMENT</h2>
            <p>Paul Walker</p>
        </div> 
       <div class="row header-stuff">
            <div class="left col-sm-3">
                <img src="<?php echo get_header_image(); ?>" class="right-header img-circle"/>
            </div>
            <div class="right col-sm-9">
                <div id="topmatter"><span> <?php 
                echo(get_post(107)->post_content)
?></span>
               </div>
            </div>
        </div>

        </header><!-- #masthead -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
