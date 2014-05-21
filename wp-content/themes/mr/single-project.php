<?php
/**
 * The Template for displaying all single projects.
 *
 * @package mr
 */

get_header(); ?>


	<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part('galleria'); ?>

	<script type="text/javascript">
		jQuery(document).ready(function($){

    		$('.content').addClass('hidden');

			$('.content-toggle , .content-header').click(function(){
				$('.content').toggleClass('hidden');
				$('.content').toggleClass('visible');
				$('.galleria').data('galleria').playToggle();
				$('.galleria-image-nav').toggle();
			})
			

		});


    		
	</script>

	<?php if(is_singular()): ?>
		<div class="content-toggle">i</div>
	<?php endif; ?>

	    <div class="content-wrapper">
		    <?php get_template_part( 'content', 'project' ); ?>
	    </div>

	<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>