<?php
/**
 * The Template for displaying all single projects.
 *
 * @package mr
 */

get_header(); ?>


	<?php while ( have_posts() ) : the_post(); ?>

	<div class="galleria-wrapper">
	      <div class="galleria">
			<?php
				//get the galler field
				$the_gallery = get_field('project_gallery');

				//echo an image for each image in teh gallery
				foreach ($the_gallery as $image) {
					$url = $image['url'];
					echo '<img src="' . $url . '" alt="">';
				}
			?>
		
			</div> <!-- galleria -->
	    </div> <!-- galleria-wrapper -->
	
		<?php get_template_part( 'content', 'project' ); ?>

		<?php 
		//mr_post_nav(); 
		?>

	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>