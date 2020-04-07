		<!-- Header -->

		<?php require_once ('views/header.php') ?>
		<!-- Navbar -->
		<?php require_once ('views/topbar.php'); ?>

		<section class="clearfix header mt-5 mb-5">
	<div class="container">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block   w-100" src="./public/images/slider/Slider1.jpg" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block  w-100" src="./public/images/slider/2.jpg" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="./public/images/slider/3.jpg" alt="Third slide">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
				
	</div>
</section>
		
		<!-- Footer -->
		<?php require_once ('views/footer.php'); ?>

		<!-- Copyright -->
		<section class="clearfix copyright border-top border-dark pt-2 text-center " style="font-size: 0.9em;">
			<div class="container-fluid text-white">
				<p class="col">© 2019. Designed by: Latnt</p>
			</div>
		</section>
		

		<?php require_once ('views/scripts.php'); ?>