<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package mr
 */
?>


<div class="content-wrapper">
   <article class="content" id="post-<?php the_ID(); ?>">
	    <input class="show-content" type="checkbox" id="show-content" name="show-content"> 
	    <header class="content-header">
	      <label class="content-toggle" for="show-content">i</label>
	      <h1 class="page-title"><?php the_title(); ?></h1>

	      <div class="date">
	      	<?php
	      	$date = get_field('project_date');
	      	$date = date('F Y', strtotime($date));
	      	echo $date;
	      	?>
	      </div>

	      <p class="credit">
	      	<?php
	      	the_field('project_credits');
	      	?>
	      </p>   
	    </header>
	    <div class="content-full">
	    	<?php the_content(); ?>
	    </div>
  </article>
</div>