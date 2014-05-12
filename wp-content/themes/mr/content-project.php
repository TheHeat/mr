<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package mr
 */
?>
<article class="content" id="post-<?php the_ID(); ?>">
	 
	<header class="content-header">
		<?php if(is_single()): ?>
			<?php the_title('<h1 class="page-title">', '</h1>'); ?>
		<?php else: ?>
			<a href="<?php the_permalink(); ?>">
				<?php the_title('<h1 class="page-title">', '</h1>'); ?>
			</a>
		<?php endif; ?>
	   

	      
		
		<?php if(get_field('project_credits')): ?>
			<div class="meta">
				<span class="date">
			      	<?php
			      	$date = get_field('project_date');
			      	$date = date('F Y', strtotime($date));
			      	echo $date . ' | ';
			      	?>
		      	</span>
		      	<span class="credit">
		      		<?php the_field('project_credits');	?>	
		      	</span>
		      	
			</div> 
		<?php endif; ?>  
    </header>
    <?php if (is_singular()): ?>
	    <span>
	    	<div class="content-full">
	    		<?php the_content(); ?>
	    	</div>	
	    </span>
    <?php endif ?>
    
</article>
