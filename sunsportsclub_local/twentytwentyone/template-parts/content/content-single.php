<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="notification">
		<div class="title"><?php echo get_the_title(); ?></div>
		<div class="notification-date">
			<p><?php echo get_the_tags()[0]->name;?></p>
			<p><?php echo get_the_date('Y年m月d日')?></p>
		</div>
		<div class="notification-content"><?php echo get_the_content(); ?></div>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
