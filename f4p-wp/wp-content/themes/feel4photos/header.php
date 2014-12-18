<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
    <!-- favicon start -->
    <link rel="icon" type="image/x-icon" href="<?php echo get_option( 'f4p_fav_icon' ); ?>" />
    <!-- favicon end -->
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php if(is_front_page()) { ?>
	<!-- outer section start -->
    <section role="outer_main">
        <!-- inner start -->
        <section role="inner_main">
        	<!-- nav + logo + social section start -->
            <aside role="nav_logo_social">
                <!-- nav link start -->
                <nav id="bt-menu" class="bt-menu">
                    <a href="#" class="bt-menu-trigger"><span>Menu</span></a>
                    <?php wp_nav_menu( array( 'theme_location' => 'f4pMainmenu' ) ); ?>
                </nav>
                <!-- nav link end -->
                <!-- logo start -->
                <div class="home_logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>" rel="home"><img src="<?php echo get_option("f4p_logo_home"); ?>" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>" width="200" /></a></div>
                <!-- logo end -->
                <!-- social links start -->
                <ul role="social_link">
                    <li><a href="<?php echo get_option( 'f4pfb_link' );?>" target="_blank">facebook</a></li>
                    <li><a href="<?php echo get_option( 'f4ptw_link' );?>" target="_blank">twitter</a></li>
                    <li><a href="<?php echo get_option( 'f4pln_link' );?>" target="_blank">linkedin</a></li>
                    <li><a href="<?php echo get_option( 'f4ppin_link' );?>" target="_blank">pinterest</a></li>
                    <li><a href="#">vimeo</a></li>
                    <li><a href="<?php echo get_option( 'f4pflckr_link' );?>" target="_blank">flickr</a></li>
                </ul>
                <!-- social links end -->
            </aside>
            <!-- nav + logo + social section end --> 
	<?php } else { ?>
	<!-- outer start -->
	<div id="page" class="hfeed site">
    	<!-- header start -->
        <header id="masthead" class="site-header" role="banner">
            <!-- logo + main navigation area start -->
            <div class="header-main" role="logo_mainnav">
                <!-- inner logo start -->
                <section role="logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>" rel="home">
                        <img src="<?php echo get_option("f4p_logo"); ?>" alt="<?php bloginfo( 'name' ); ?>" title="<?php bloginfo( 'name' ); ?>" />
                    </a>
                </section>
                <!-- inner logo end --> 
                <!-- main nav start -->
                <nav role="mainnav">
                	<?php wp_nav_menu( array( 'theme_location' => 'f4pMainmenu' ) ); ?>
                </nav>
                <!-- main nav end --> 
                <!-- site search start -->
              	<div id="search-container" class="search-box-wrapper site_search">
                	<div class="search-box">
                		<?php get_search_form(); ?>
                    </div>
              	</div>
              	<!-- site search end --> 
            </div>
            <!-- logo + main navigation area end --> 
        </header>
		<!-- header end -->
        
        <!-- body start -->
		<div id="main" class="site-main container">
        	<!-- inner body start -->
        	<div id="bl-main" class="bl-main"> 
			<?php } ?>