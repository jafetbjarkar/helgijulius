<?php
/**
 * @package WordPress
 * @subpackage HelgiJulius.com
 * @since HelgiJulius.com 1.0
 */

get_header(); ?>

	<div id="content-area" class="content-area">
		<?php if ( have_posts() ) : ?>
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>


				<?php // Get category for current post ?>
				<?php $category = get_the_category()[0]->slug; ?>
				
				<?php if( $category == 'album' ) : ?>
					<?php get_template_part( 'content', $category ); ?>
				
				<?php elseif( $category == 'player' ) : ?>
					<?php get_template_part( 'content', $category ); ?>
				
				<?php else : //normal posts + format ?>
					<?php get_template_part( 'content' ); ?>
				<?php endif; ?>	


			<?php endwhile; ?>
		<?php endif; ?>

	</div><!-- #content-area -->

<?php get_footer(); ?>