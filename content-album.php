<?php
/**
 * @package WordPress
 * @subpackage HelgiJulius.com
 * @since HelgiJulius.com 1.0
 */
?>

<?php 
	/* Get theme color and image from WP ACF */
	$color = get_field('frame_color');
	$image = get_field('bg_img');
	$image_styles = "background: url({$image['url']}) no-repeat center bottom; background-size: cover;"; 

	// Check if post has content
	if($post->post_content=="") {
		$no_text = "no-text";
	} else {
		$no_text = "";
	}
?>




<div class="post-frame <?php echo $no_text; ?>" style="<?php echo $image_styles; ?>">
	<article id="post-<?php the_ID(); ?>" data-color="<?php echo $color; ?>" <?php post_class(); ?>>
		
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<div class="playlist">
				<?php the_field('playlist'); ?>	
			</div>
			



			
			<div class="window">
				<div>
					<!-- <div class="album-header">
						<h2><?php the_title(); ?></h2>
					</div> -->
					<div class="album-info">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div><!-- .entry-content -->


		<footer class="entry-meta-comments">
		</footer><!-- .entry-meta -->
		
	</article><!-- #post -->

</div>


