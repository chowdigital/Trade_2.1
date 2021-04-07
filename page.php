<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wordpress-bootstrap-starter-theme
 */

get_header();
?>


<div class="page-img-header d-flex z-depth-3" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">

<div class="mask gradient-custom" style="width: 100%; height: 100%;">

  </div>
</div>
<main id="primary" class="site-main container  pt-6 pb-6">
  <div class="z-depth-3">
  <div class="menu-content-box">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );
			

			

		endwhile; // End of the loop.
		?>
</div>
	</div>
	</main><!-- #main -->
	<?php get_template_part( 'template-parts/banner', 'page' ); ?>

<?php

get_footer();
