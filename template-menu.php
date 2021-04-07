<?php /* Template Name: Menu*/ get_header(); ?>

<div class="page-img-header d-flex z-depth-3" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">

<div class="mask gradient-custom" style="width: 100%; height: 100%;">

  </div>
</div>


<main class="container-fluid">
  <div class="container pt-6 pb-6">
    <div class="row z-depth-3">
      
    <div class="menu-image-box col-12 col-lg-6" style="background-image: url(<?php the_field('menu_image');  ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
      
      </div>
      


      <div class="menu-content-box col-12 col-lg-6 text-center">
	<header class="entry-header">
		<?php the_title( '<h1>', '</h1>' ); ?>
	</header><!-- .entry-header -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>



      
        
<div class="row">
        <div class="col-12">
          <?php if( get_field('f_1') ): ?>
            <a href="<?php the_field('f_1'); ?>"><button type="button" class="btn btn-light btn-80">
              <div class="div"><h4><?php the_field('n_1'); ?></h4></div>
              <div class="div"><?php the_field('s_1'); ?></div>
            </button></a>
           
         
          <?php endif; ?>
        </div>
        <div class="col-12">
          <?php if( get_field('f_2') ): ?>

            <a href="<?php the_field('f_2'); ?>"><button type="button" class="btn btn-light btn-80">
              <div class="div"><h4><?php the_field('n_2'); ?></h4></div>
              <div class="div"><?php the_field('s_2'); ?></div>
            </button></a>
                        <?php endif; ?>
        </div>
      </div>
          
      <div class="row">
        <div class="col-12">
          <?php if( get_field('f_3') ): ?>
            <a href="<?php the_field('f_3'); ?>"><button type="button" class="btn btn-light btn-80">
              <div class="div"><h4><?php the_field('n_3'); ?></h4></div>
              <div class="div"><?php the_field('s_3'); ?></div>
            </button></a>        <?php endif; ?>
        </div>
        <div class="col-12">
        <?php if( get_field('f_4') ): ?>
          <a href="<?php the_field('f_4'); ?>"><button type="button" class="btn btn-light btn-80">
              <div class="div"><h4><?php the_field('n_4'); ?></h4></div>
              <div class="div"><?php the_field('s_4'); ?></div>
            </button></a>      <?php endif; ?>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
        <?php if( get_field('f_5') ): ?>
          <a href="<?php the_field('f_1'); ?>"><button type="button" class="btn btn-light btn-80">
              <div class="div"><h4><?php the_field('n_5'); ?></h4></div>
              <div class="div"><?php the_field('s_5'); ?></div>
            </button></a>      <?php endif; ?>
        </div>
        <div class="col-12">
        <?php if( get_field('f_6') ): ?>
          <a href="<?php the_field('f_1'); ?>"><button type="button" class="btn btn-light btn-80">
              <div class="div"><h4><?php the_field('n_6'); ?></h4></div>
              <div class="div"><?php the_field('s_6'); ?></div>
            </button></a>      <?php endif; ?>
        </div>
      </div>


      </div>
</div>
</div>
</main><!-- #main -->
<?php get_template_part( 'template-parts/banner', 'page' ); ?>
<?php get_footer(); ?>