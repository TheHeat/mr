<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package mr
 */
?>
<div class="content-wrapper">
	<article id="page-<?php the_ID(); ?>" <?php post_class('content'); ?>>
		
		<header class="content-header">
			<h1 class="page-title"><?php the_title(); ?></h1>
		</header>
		<div class="content-full">
			<?php the_content(); ?>
			<?php edit_post_link( __( 'Edit', 'mr' ), '<span class="edit-link">', '</span>' ); ?>
		</div>
		
		<?php wp_link_pages( array('before' => '<div class="page-links">' . __( 'Pages:', 'mr' ),'after'  => '</div>',));?>
		
	</article>
</div>
	
