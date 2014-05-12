<?php
 /**
  * Galleria module
  *
  **/ 

	//get the gallery field
	$the_gallery = get_field('gallery');
	$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'gallery' );

	if($the_gallery || $featured_image){
 ?>

<div class="galleria-wrapper">

	<?php if($the_gallery): ?>
		<div class="galleria">
			<?php

				//echo an image for each image in the gallery
				foreach ($the_gallery as $image) {
					$url = $image['sizes']['gallery'];
					$alt = $image['alt'];
					echo '<img src="' . $url . '" alt="' . $alt . '">';
				}
			?>		
		</div>

		<script type="text/javascript">
		jQuery(document).ready(function($){
			Galleria.loadTheme("<?php echo get_stylesheet_directory_uri() ;?>/js/galleria/themes/marcrees/galleria.marcrees.js");
    		Galleria.run('.galleria');
		});

		</script>

	<?php else: ?>
		<div class="wallpaper" style="background-image:url('<?php echo $featured_image[0]; ?>');"></div>
	<?php endif; ?>
</div> <!-- galleria-wrapper -->

<?php } ?>