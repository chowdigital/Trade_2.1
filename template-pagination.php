<?php /* Template Name: Pagination*/ get_header(); ?>
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
  <!--- my loop with Pagenation -->
  <?php 
  //get the current page
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

  //pagination fixes prior to loop
  $temp =  $query;
  $query = null;

  //custom loop using WP_Query
  $query = new WP_Query( array( 
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'ASC' 
  ) ); 

 //set our query's pagination to $paged
 $query -> query('cat=6&posts_per_page=12'.'&paged='.$paged);

 if ( $query->have_posts() ) : 
   while ( $query->have_posts() ) : $query->the_post();
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
  <?php endwhile;?>

  <?php //pass in the max_num_pages, which is total pages ?>
  <div class="pagenav">
    <div class="alignleft"><?php previous_posts_link('Previous', $query->max_num_pages) ?></div>
    <div class="alignright"><?php next_posts_link('Next', $query->max_num_pages) ?></div>
  </div>

<?php endif; ?>

<?php //reset the following that was set above prior to loop
$query = null; $query = $temp; ?>
<!--- my loop with Pagenationend  -->

   </div>
</main>

<?php get_footer(); ?>