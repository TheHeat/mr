<?php
/**
 * The Template for displaying all single posts.
 *
 * @package mr
 */

get_header(); ?>

<?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'gallery' ); ?>

<div class="galleria-wrapper">
	<div class="wallpaper" style="background-image:url('<?php echo $featured_image[0]; ?>');"></div>
</div>

<div class="content-wrapper">
	<main class="content">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'single' ); ?>
			<?php mr_post_nav(); ?>
		<?php endwhile; // end of the loop. ?>
	</main><!-- content -->
</div><!-- content-wrapper -->


<?php get_footer(); ?>