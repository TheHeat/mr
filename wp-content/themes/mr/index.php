<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
					<?php the_post_thumbnail( 'gallery' ); ?>
				</a>
				<?php get_template_part( 'content', get_post_type() ); ?>	
			</div>
		<?php endwhile; ?>
	<?php else : ?>
		<?php get_template_part( 'content', 'none' ); ?>
	<?php endif; ?>
</div>

<?php mr_paging_nav();?>

<?php get_footer(); ?>
