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

    		$('.content-full').fitVids();

    		$('.content').addClass('hidden');

			$('.content-toggle').click(function(){
				$('.content').toggleClass('hidden');
				$('.content').toggleClass('visible');
			})
			
			$('.content-header').click(function(){
				$('.content').toggleClass('hidden');
				$('.content').toggleClass('visible');
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