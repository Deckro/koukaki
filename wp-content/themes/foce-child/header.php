<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
    
		<nav id="site-navigation" class="main-navigation">
        <a class="site-title"href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
            <div id="mysidenav" class="sidenav">
                    <img class="logomenu" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>" alt="">  
                <ul>
                    <li><a id="histoire"class="Histoire rotationLentAfter rotationElement rotationLentBefore"href="#story">Histoire</a></li>
                    <li><a id="perso"class="perso rotationElement rotationLentAfter" href="#characters">Personnages</a></li>
                    <li><a id="placeoulieu"class="placeoulieu rotationElement rotationLentBefore"href="#place">Lieu</a></li>
                    <li><a id="koukaki"class="koukaki"href="#studio">Studio Koukaki</a></li>
                    <li class="studiokouk rotationElement rotationLentAfter"></li>
                </ul>
            </div>

                <div><a id ="closeBtn" class="close">x</a></div>
                <div id="openBtn" class="iconeburger">
                    <a href="#">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </a>
                </div>
            

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
