<?php
/**
 * The Template for displaying all single posts.
 *
 * @package mr
 */

get_header(); ?>

<?php get_template_part('galleria' ); ?>

<div class="content-wrapper">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'single' ); ?>
			<?php mr_paging_nav(); ?>
		<?php endwhile; // end of the loop. ?>
</div><!-- content-wrapper -->
<?php mr_post_nav(); ?>


<?php get_footer(); ?>