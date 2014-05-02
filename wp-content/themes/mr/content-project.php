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
	      <!-- Production date - ACF datepicker Field maybe only show year?? Will discuss with Marc R-->
	      <div class="date">
	      	<?php
	      	$date = get_field('project_date');
	      	$date = date('m YY', strtotime($date));
	      	echo $date;
	      	?>
	      </div>
	      <!-- Production credit - probably just a text field -->
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