<?php /* Template Name: Contact*/ get_header(); ?>

<main id="primary" class="site-main container">
<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
<p class="">Do you have any questions? Please do not hesitate to contact us directly.</p>
<!--Grid row-->
<div class="row wow fadeIn">



	<!--Section: Contact v.2-->
	<section class="mb-4">

	
	
		<!--Section description-->
		

		<div class="row">

			<!--Grid column-->
			<div class="col-md-6 mb-md-0 mb-5">
				<form id="contact-form" name="contact-form" action="mail.php" method="POST">

					<!--Grid row-->
					<div class="row">

						<!--Grid column-->
						<div class="col-md-6">
							<div class="md-form mb-0">
								<input type="text" id="name" name="name" class="form-control">
								<label for="name" class="">Your name</label>
							</div>
						</div>
						<!--Grid column-->

						<!--Grid column-->
						<div class="col-md-6">
							<div class="md-form mb-0">
								<input type="text" id="email" name="email" class="form-control">
								<label for="email" class="">Your email</label>
							</div>
						</div>
						<!--Grid column-->

					</div>
					<!--Grid row-->

					<!--Grid row-->
					<div class="row">
						<div class="col-md-12">
							<div class="md-form mb-0">
								<input type="text" id="subject" name="subject" class="form-control">
								<label for="subject" class="">Subject</label>
							</div>
						</div>
					</div>
					<!--Grid row-->

					<!--Grid row-->
					<div class="row">

						<!--Grid column-->
						<div class="col-md-12">

							<div class="md-form">
								<textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
								<label for="message">Your message</label>
							</div>

						</div>
					</div>
					<!--Grid row-->

				</form>

				<div class="text-center text-md-left">
					<a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();"> <i class="fas fa-paper-plane"></i> Send</a>
				</div>
				<div class="status"></div>
			</div>
			<!--Grid column-->

			<!--Grid column-->
			<div class="col-sm-12 col-md-2">
</div>
			<div class="col-sm-12 col-md-4">
				<ul class="list-unstyled mb-0">
					<li>
					<h4><i class="fas fa-phone mt-4 fa-1.5x"></i> 01205 369477 </h4>
					</li>

					<li>
						<h4><i class="fas fa-phone mt-4 fa-1.5x"></i> 07788 550074 </h4>
					</li>

					<li>
						<h4><i class="fas fa-envelope mt-4 fa-1.5x"></i> info@gatehousetraining.com</h4>
					</li>
				</ul>
			</div>
			<!--Grid column-->

		</div>

	</section>
	<!--Section: Contact v.2-->
</div>
</main>
<?php get_template_part( 'template-parts/banner', 'page' ); ?>
<?php get_footer(); ?>