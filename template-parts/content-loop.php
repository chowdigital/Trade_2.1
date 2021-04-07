<?php
/**
 * Template part for displaying the loop
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wordpress-bootstrap-starter-theme
 */

?>



<?php global $query_string; // required
$posts = query_posts($query_string.'&cat=-1'); // exclude category 9 ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<?php the_content(); ?>
	</div>

<?php endwhile; ?>

	<div class="navigation">
		<div class="next-posts"><?php next_posts_link(); ?></div>
		<div class="prev-posts"><?php previous_posts_link(); ?></div>
	</div>

<?php else : ?>

	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<h1>Not Found</h1>
	</div>

<?php endif; ?>

<?php wp_reset_query(); // reset the query ?>