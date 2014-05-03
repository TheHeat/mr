<?php
/**
 * The Template for displaying all single posts.
 *
 * @package mr
 */

get_header(); ?>

<div class="content-wrapper">
	<main class="content">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'single' ); ?>
			<?php mr_post_nav(); ?>
		<?php endwhile; // end of the loop. ?>
	</main><!-- content -->
</div><!-- content-wrapper -->


<?php get_footer(); ?>