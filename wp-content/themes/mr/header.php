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
    	<h1 class="site-title"><a href="<?php bloginfo('url'); ?>" rel="home">MR.</a></h1>
		<nav id="site-navigation" class="header-menu" role="navigation">
			<label for="showmenu" class="showmenu-label">Menu</label>
      		<input type="checkbox" class="showmenu" name="showmenu" id="showmenu">
			
			<ul class="wpml-menu">
			<?php  
				//WPML Lanuage Switcher
				$langs = icl_get_languages('skip_missing=N&orderby=KEY&order=DIR&link_empty_to=str');

				foreach ($langs as $lang) {

					echo '<li',($lang['active'] == 1 ? ' class="active lang"' : ''), '>';
						echo  ($lang['active'] == 0 ? '<a class="lang" href="' . $lang['url'] . '">' : '') . $lang['language_code'] . ($lang['active'] == 0 ? '</a>' : '');
					echo '</li>';
				}

				?>		
			</ul>

			<?php wp_nav_menu( array('container' => FALSE, 'menu_class' => 'nav-menu',) ); ?>
		</nav>
		<!-- #site-navigation -->
    </header>