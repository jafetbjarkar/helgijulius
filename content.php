<?php
/**
 * @package WordPress
 * @subpackage HelgiJulius.com
 * @since HelgiJulius.com 1.0
 */
?>

<?php /* Get theme color and image from WP ACF */ ?>
<?php $color = get_field('frame_color'); ?>
<?php $image = get_field('bg_img'); ?>
<?php $image_styles = "background: url({$image['url']}) no-repeat center bottom; background-size: cover;"  ?>

<div id="post-frame" class="post-frame" data-color="<?php echo $color; ?>" style="<?php echo $image_styles; ?>">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_field('playlist'); ?>
			<?php the_content(); ?>
		</div><!-- .entry-content -->e


		<footer class="entry-meta-comments">
		</footer><!-- .entry-meta -->
		
	</article><!-- #post -->
	
	<!-- Black or white frame with fancy corners -->
	<!-- <div class="inner-frame <?php //echo $color; ?>"></div> -->

</div>



