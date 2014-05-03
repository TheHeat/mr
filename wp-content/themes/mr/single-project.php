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

	    <div class="content-wrapper">
		    <?php get_template_part( 'content', 'project' ); ?>
	    </div>
	
		

		<?php 
		//mr_post_nav(); 
		?>

	<?php endwhile; // end of the loop. ?>

	<script type="text/javascript">
	jQuery(document).ready(function($){
		Galleria.loadTheme("<?php echo get_template_directory_uri() ;?>/js/galleria/themes/marcrees/galleria.marcrees.js");
    	Galleria.run('.galleria');
	});
	</script>
<?php get_footer(); ?>