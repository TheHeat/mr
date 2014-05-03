<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package mr
 */

get_header(); ?>

<div class="feed">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .page-header -->

			

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', get_post_type() ); ?>
				<?php endwhile; ?>
			<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
				
</div>

			

<?php get_footer(); ?>
