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
	        <img src="images/galleriatest/rawmaterial_01.jpg" alt="">
	        <img src="images/galleriatest/rawmaterial_02.jpg" alt="">
	        <img src="images/galleriatest/rawmaterial_03.jpg" alt="">
	        <img src="images/galleriatest/rawmaterial_04.jpg" alt="">
	        <img src="images/galleriatest/rawmaterial_05.jpg" alt="">
	        
	        <a href="http://vimeo.com/89667066"><img src="images/galleriatest/rawmaterial_06.jpg"></a>

	      </div>
	    </div>

		<?php get_template_part( 'content', 'project' ); ?>

		<?php 
		//mr_post_nav(); 
		?>

	<?php endwhile; // end of the loop. ?>



<?php get_sidebar(); ?>
<?php get_footer(); ?>