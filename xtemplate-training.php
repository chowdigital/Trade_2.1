<?php /* Template Name: Training*/ get_header(); ?>
<div class="container">
<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
<!-- Card -->

<div class="card">
<?php
// The Query
		$the_query = new WP_Query( 'category__not_in=17&posts_per_page=24' );
//posts_per_page=5'


// The Loop
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				$category = get_the_category(); 
				?>		


  <!-- Card image -->
  <div class="view overlay">
    <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>"
      alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body">

  
				



    <!-- Title -->
    <h4 class="card-title"><?php the_title(); ?></h4>
    <!-- Text -->
    <p class="card-text"><?php the_excerpt(); ?></p>
    <!-- Button -->
    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Find out more</a>

  </div>

  <?php 
}
} else {
// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
?>	
</div>
<!-- Card -->





<div id="primary" class="content">
		<main id="main" class="site-main">
		
		<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->


	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
			<!---- THE LOOP START -->

		
		<div class="the-loop">
		<?php
// The Query
		$the_query = new WP_Query( 'category__not_in=17&posts_per_page=24' );
//posts_per_page=5'


// The Loop
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				$category = get_the_category(); 
				?>		
				


				<div class="<?php echo $category[0]->slug;?> blog-link">
					<div class="blog-img" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
				

						<a href="<?php the_permalink(); ?>" class="">
							<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
						</a>


					</div>
				
					<div class="blog-text">
							<a href="<?php the_permalink(); ?>" class="">
								
								
								<div class="bottom" id="<?php echo $category[0]->slug;?>">
									<p><?php print get_the_category(get_the_ID())[0]->name; ?></p>
								</div>
								<div class="title"><h3><?php the_title(); ?></h3></div>

							</a>
							<?php the_excerpt(); ?>

					</div>
				</div>
				






				<?php 



        




			}
		} else {
    // no posts found
		}
		/* Restore original Post Data */
		wp_reset_postdata();

		?>	
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php get_footer(); ?>