<?php
/**
 * @package mr
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>
	
	<header class="content-header">
		<h1 class="page-title"><?php the_title(); ?></h1>
		<div class="date"><?php mr_posted_on(); ?></div>
		<div class="meta">
			<?php
				/* translators: used between list items, there is a space after the comma */
				$category_list = get_the_category_list( __( ', ', 'mr' ) );

				/* translators: used between list items, there is a space after the comma */
				$tag_list = get_the_tag_list( '', __( ', ', 'mr' ) );

				if ( ! mr_categorized_blog() ) {
					// This blog only has 1 category so we just need to worry about tags in the meta text
					if ( '' != $tag_list ) {
						$meta_text = __( 'Tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'mr' );
					} else {
						$meta_text = __( 'Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'mr' );
					}
					} else {
					// But this blog has loads of categories so we should probably display them here
					if ( '' != $tag_list ) {
						$meta_text = __( 'Posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'mr' );
					} else {
						$meta_text = __( 'Posted in %1$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'mr' );
					}
					} // end check for categories on this blog
					printf(
					$meta_text,
					$category_list,
					$tag_list,
					get_permalink()
				);
			?>
		</div>   
	</header>
	<div class="content-full">
		<?php the_content(); ?>
		<?php edit_post_link( __( 'Edit', 'mr' ), '<span class="edit-link">', '</span>' ); ?>
	</div>
		
	<?php wp_link_pages( array('before' => '<div class="page-links">' . __( 'Pages:', 'mr' ),'after'  => '</div>',));?>
	
</article>