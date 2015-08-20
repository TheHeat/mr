<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package mr
 */

get_header(); ?>

<div class="feed">

	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="feed-item">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'portfolio' ); ?>
				</a>
				<?php get_template_part( 'content', get_post_type() ); ?>	
			</div>
		<?php endwhile; ?>
	<?php else : ?>
		<?php get_template_part( 'content', 'none' ); ?>
	<?php endif; ?>
</div>

<?php get_footer(); ?>
