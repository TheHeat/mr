<?php
/**
 * The file to show blog home page
 *
 * @package mr
 */

get_header(); ?>

<h1 class="page-title"><?php _e( 'Blog' );?></h1>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'single' ); ?>

		<?php mr_post_nav(); ?>

	<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>