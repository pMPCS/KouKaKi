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
	 <div class="header-inner">
		<nav id="site-navigation" class="main-navigation">
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <button class="burgerMenu" aria-controls="fullScreenMenu" aria-expanded="false">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>
		</nav><!-- #site-navigation -->
			
	</div>
            <div id="fullScreenMenu" class="fullScreenMenu">
                <div class="fullMenu">
                    <img class="logoMenu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
                    <ul>
                        <li><a href="#story">Histoire</a></li>
                        <li><a href="#characters">Personnages</a></li>
                        <li><a href="#place">Lieu</a></li>
                        <li><a href="#studio">Studio Koukaki</a></li>
                    </ul>
                    <p>Studio Koukaki</p>
                </div>
                <div class="flowersMenu">
                    <img class="orchid" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/orchid.png'; ?> " >
                    <img class="sunflower" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Sunflower.png'; ?> " >
                    <img class="randomFlower" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/random_flower.png '; ?> " >                   
                    <img class="flower" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/flower.png'; ?> " >
                    <img class="hibiscus" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/hibiscus_footer.png'; ?> " >
                </div>
                <div class="catsMenu">
                    <img class="Kawaneko" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Kawaneko.png'; ?> " >
                    <img class="Jaakuna" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Jaakuna.png'; ?> " >
                    <img class="Orenjiiro" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Orenjiiro.png'; ?> " >
                </div>
			</div>

        
	</header><!-- #masthead -->