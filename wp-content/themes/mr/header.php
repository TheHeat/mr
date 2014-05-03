<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package mr
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div class="site-wrapper">
    <header class="site-header">
    	<h1 class="site-title"><a href="<?php echo bloginfo('home_url'); ?>" rel="home">MR.</a></h1>
		<nav id="site-navigation" class="header-menu" role="navigation">
			<label for="showmenu" class="showmenu-label">Menu</label>
      		<input type="checkbox" class="showmenu" name="showmenu" id="showmenu">
			<?php wp_nav_menu( array('container' => FALSE, 'menu_class' => 'nav-menu',) ); ?>
		</nav>
		<!-- #site-navigation -->
    </header>