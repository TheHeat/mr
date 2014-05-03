<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package mr
 */
?>


<article class="content" id="post-<?php the_ID(); ?>">
	<?php if(is_singular()): ?><input class="show-content" type="checkbox" id="show-content" name="show-content"><?php endif; ?>
	 
	<header class="content-header">
		<?php if(is_singular()): ?><label class="content-toggle" for="show-content">i</label>
			<?php the_title('<h1 class="page-title">', '</h1>'); ?>
		<?php else: ?>
			<a href="<?php the_permalink(); ?>">
				<?php the_title('<h1 class="page-title">', '</h1>'); ?>
			</a>
		<?php endif; ?>
	   

	      <div class="date">
	      	<?php
	      	$date = get_field('project_date');
	      	$date = date('F Y', strtotime($date));
	      	echo $date;
	      	?>
	     </div>
		
		<?php if(get_field('project_credits')): ?>
			<div class="meta credit">
		      	<?php the_field('project_credits');	?>
			</div> 
		<?php endif; ?>  
    </header>
    <?php if (is_singular()): ?>
	    <div class="content-full">
	    	<?php the_content(); ?>
	    </div>	
    <?php endif ?>
    
</article>
