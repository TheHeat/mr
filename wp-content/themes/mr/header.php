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

			
			<?php wp_nav_menu( array('container' => FALSE, 'menu_class' => 'nav-menu',) ); ?>
			
			<div class="switcher">
			<?php  
				//WPML Lanuage Switcher
				$langs = icl_get_languages('skip_missing=N&orderby=KEY&order=DIR&link_empty_to=str');

				if(count($langs) > 1){
					foreach ($langs as $lang) {

						
						echo '<span',($lang['active'] == 1 ? ' class="switch switchactive"' : ' class="switch"'), '>';
						echo  ($lang['active'] == 0 ? '<a href="' . $lang['url'] . '">' : '') ;
						echo $lang['language_code'];
						echo  ($lang['active'] == 0 ? '</a>' : '');
						echo '</span>';
						
					}
				}
				?>		
			</div>
			
		</nav>
		<!-- #site-navigation -->
    </header>