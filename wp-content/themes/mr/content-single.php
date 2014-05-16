<?php
/**
 * @package mr
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>
	<header class="content-header">
		<h1 class="page-title"><?php the_title(); ?></h1>
		<div class="meta">
			<p>Posted: <?php the_date() ?></p>
		</div>   
	</header>

	<?php if (is_singular()): ?>
		<div class="content-full">
	    	<?php the_content(); ?>
    		<?php if($the_gallery): ?>
				<div class="galleria">
					<?php

						//echo an image for each image in the gallery
						foreach ($the_gallery as $image) {
							$url = $image['sizes']['gallery'];
							$alt = $image['alt'];
							$caption = $image['caption'];
							echo '<img src="' . $url . '" alt="' . $alt . '" data-description="' . $caption . '" />';
						}
					?>		
				</div>

				<script type="text/javascript">
				jQuery(document).ready(function($){
					Galleria.loadTheme("<?php echo get_stylesheet_directory_uri() ;?>/js/galleria/themes/marcrees/galleria.marcrees.js");
		    		Galleria.run('.galleria');
				});

				</script>
			    
			<?php endif?>
		</div>
    <?php endif ?>
		
</article>