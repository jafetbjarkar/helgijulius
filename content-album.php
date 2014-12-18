<?php
/**
 * @package WordPress
 * @subpackage HelgiJulius.com
 * @since HelgiJulius.com 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">

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
