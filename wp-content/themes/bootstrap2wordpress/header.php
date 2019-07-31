<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_wordPrees
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	   <!--Bootsrapt core CSS-->
	   <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

		<!--FontAwesome Icons-->
		<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

		<!--Google Fonts n-->
		<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" type="text/css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bootstrap2wordpress' ); ?></a>

 <!--header-->
 <header class="site-header" role="banner">
        <!-- Navbar -->
        <div class="navbar-wrapper">
            <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png"
                                alt="Bootstrap to WordPress"></a>
                    </div>
                    <!--Navbar header-->

					<!-- If the menu (WP admin area) is not set, then the "menu_class" is applied 
					to "container". In other words, it overwrites the "container_class". Ref:
					http://wordpress.org/support/topic/wp_nav_menu_class-usage-bug?replies=4  
					--->
					<?php 
						wp_nav_menu( array(
						
						'theme_location'  => 'primary',
						'container' 	  => 'nav',
						'container_class' => 'navbar-collapse collapse',
						'menu_class'      => 'nav navbar-nav navbar-right'
						));
					?>

                    
                </div><!-- container -->
            </div><!-- navbar -->
        </div><!-- navbar-wrapper -->
    </header>

