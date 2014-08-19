<?php
/**
 * @package mr
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>
	<header class="content-header">
		<?php if(is_singular()): ?><label class="content-toggle" for="show-content">i</label>
			<?php the_title('<h1 class="page-title">', '</h1>'); ?>
		<?php else: ?>
			<?php get_the_image(array('size' => 'gallery')); ?>
			<a href="<?php the_permalink(); ?>">
				<?php the_title('<h1 class="page-title">', '</h1>'); ?>
			</a>
		<?php endif; ?>
		<div class="meta">
			<p>Posted: <?php the_date() ?></p>
		</div>   
	</header>

	<?php if (is_singular()): ?>
		<div class="content-full">
	    	<?php the_content(); ?>
   			<?php edit_post_link( __( 'Edit', 'mr' ), '<span class="edit-link">', '</span>' ); ?>
	    </div>	
    	<?php wp_link_pages( array('before' => '<div class="page-links">' . __( 'Pages:', 'mr' ),'after'  => '</div>',));?>
    <?php endif ?>
		
</article>