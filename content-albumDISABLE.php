<?php
/**
 * @package WordPress
 * @subpackage HelgiJulius.com
 * @since HelgiJulius.com 1.0
 */
?>
<div id="post-frame" class="post-frame">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_field('playlist'); ?>
			<?php the_content(); ?>
		</div><!-- .entry-content -->


		<footer class="entry-meta-comments">
		</footer><!-- .entry-meta -->
		
	</article><!-- #post -->
</div>


	<!-- Background image -->
<?php $image = get_field('bg_img'); ?>
<?php if( !empty($image) ): ?>
	<div class="bg-img" style="background: black url(<?php echo $image['url'] ?>) no-repeat fixed center bottom;"></div>
<?php endif; ?>
