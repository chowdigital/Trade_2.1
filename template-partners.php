<?php /* Template Name: Partners*/ get_header(); ?>
<div class="page-img-header d-flex z-depth-3" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">


</div>
		<main id="primary" class="site-main container pt-6 pb-6">
		<div class="z-depth-3 copper-border" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/coppertile.jpg');">
    <div class="main-content-box z-depth-1">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			

			

		endwhile; // End of the loop.
		?>

 
 
  <!--Grid row-->
  <div class="row wow fadeIn">
    <?php
    // The Query
    $the_query = new WP_Query( 'cat=6&posts_per_page=24' );
    //posts_per_page=5'


    // The Loop
        if ( $the_query->have_posts() ) {
          while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $category = get_the_category(); 
            ?>		


        <!--Grid column-->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4 d-flex flex-column">
     

             <!--Featured image-->
             <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>

<div class="view overlay hm-white-slight rounded z-depth-2 mb-4 thumb-wrapper square-img" style="background-image: url('<?php echo $url ?>'); background-repeat: no-repeat; background-position: center; background-size: cover;">


    <a href="<?php echo get_permalink() ?>">
        <div class="mask"></div>
    </a>
</div>

<div>
<h4 class="mb-3 font-weight-bold">

    <strong><?php the_title(); ?></strong>
</h4>


<p class="grey-text"><?php the_excerpt(); ?></p>
</div>
<div class="mt-auto">
<a href="<?php echo get_permalink() ?>"><button type="button" class="btn btn-dark">Find out More </button></a>
</div>
</div>
<!--Grid column-->

      <?php
      
      $counter++;
      } // end while
      } // end if
      wp_reset_postdata(); 
      ?>
     </div>
    <!--Grid row-->
    
    </div>
    </div>
</main>

<?php get_footer(); ?>