<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package icos
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
    
</head>

<body <?php body_class(); ?>>
    <div id="wrapper">

        <!-- Header --> 
        <header class="site-header <?php if(icos_get_option('sticky')) echo 'is-sticky'; ?>">
            <!-- Navbar -->
            <?php 
                $layout = icos_get_option('hlayout'); 
                if( $layout == 'h2' ) { 
                    get_template_part('framework/header/h2-onepage');
                }else{
                    get_template_part('framework/header/h1-onepage');
                }

            ?>
            <!-- End Navbar -->
        </header>
        <!-- End Header -->