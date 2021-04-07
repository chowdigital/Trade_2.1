<?php /* Template Name: Home*/ get_header(); ?>
<!-- Full Page Intro -->

<div class="view full-page-intro z-depth-3">

<video playsinline autoplay muted loop id="myVideo" class="view full-page-intro">
  		<source src="<?php echo get_template_directory_uri(); ?>/assets/img/video/blackbook_1.0.mp4" type="video/mp4">
  			<source src="<?php echo get_template_directory_uri(); ?>/assets/img/video/blackbook_1.0.webm" type="video/webm">
  				<source src="<?php echo get_template_directory_uri(); ?>/assets/img/video/blackbook_1.0.ogg" type="video/ogg">
		 </video>
<!-- Mask & flexbox options-->

<div class="mask d-flex justify-content-center align-items-center">

  <!-- Content -->
  <div class="container">

    <!--Grid row-->
    <div class="row wow fadeIn">
      <div class="white-content-box text-center">
      <h1><?php the_field('welcome_title'); ?></h1>
      <p><?php the_field('welcome_body'); ?></p>
      <button type="button" class="btn btn-primary waves-effect waves-light">Book A Table</button>

      </div>
      
    </div>
    <!--Grid row-->

  </div>
  <!-- Content -->

  

</div>
<!-- Mask & flexbox options-->

</div>
<!-- Full Page Intro --> 






<main class="container-fluid">


  <div class="container pt-6 pb-6 z-depth-3">
    <div class="row">
      <div class="menu-image-box col-12 col-lg-6" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
      
      </div>
      <div class="menu-content-box col-12 col-lg-6">
      <header class="entry-header">
	          	<?php the_title( '<h1>', '</h1>' ); ?>
	    </header><!-- .entry-header -->
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
          the_content();
          endwhile; else: ?>
          <p>Sorry, no posts matched your criteria.</p>
          <?php endif; ?>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="row col-lg-6 offset-lg-3">
      <img id="full-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/TBB_Full_Logo_Dark.png" alt="Black Book Soho Logo">
    </div>
  </div>
</main><!-- #main -->




<main id="primary" class="site-main container  pt-6 pb-6">
<div class="z-depth-3">
  <div class="menu-content-box col-12">
 
  <h1 class="entry-title">Events</h1>
  <!--Grid row-->
  <div class="row wow fadeIn">
    <?php
    // The Query
    $the_query = new WP_Query( 'cat=1&posts_per_page=4' );
    //posts_per_page=5'


    // The Loop
        if ( $the_query->have_posts() ) {
          while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $category = get_the_category(); 
            ?>		


        <!--Grid column-->
        <div class="col-lg-3 col-md-6 col-sm-12 mb-4 d-flex flex-column">
     

            <!--Featured image-->
            <div class="view overlay hm-white-slight rounded z-depth-2 mb-4 thumb-wrapper">

              <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'img-fluid')); ?>
          
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
            <a href="<?php echo get_permalink() ?>"><button type="button" class="btn btn-light">Find out More </button></a>
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
    <div class="more-box text-center">
    <a href="events"><button type="button" class="btn btn-primary">All Events</button></a>
    </div>
    </div>
    </div>
</main>
<?php get_template_part( 'template-parts/banner', 'page' ); ?>
<?php get_footer(); ?>