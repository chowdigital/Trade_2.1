<?php
/**
 * Template part for displaying a banner
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wordpress-bootstrap-starter-theme
 */

?>
<?php if( get_field('on_off') ): ?>

<div class="container-fluid mask d-flex justify-content-center align-items-center" style="background-image: url(<?php the_field('B1_image'); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">

  <!-- Content -->
  <div class="container">

    <!--Grid row-->
    <div class="row wow fadeIn pt-6 pb-6">
      <div class="white-content-box text-center">
      <h1><?php the_field('B1_title'); ?></h1>
      <p><?php the_field('b1_description'); ?></p>
      <a href="<?php the_field('b1_button_link'); ?>"><button type="button" class="btn btn-primary"><?php the_field('b1_btn_text'); ?></button></a>

      </div>
      
    </div>
    <!--Grid row-->

  </div>
  <!-- Content -->

</div>

<?php endif; ?>




