<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Boutique</title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="/BoutiqueShop/public/css/bootstrap.min.css">
		<link rel="stylesheet" href="/BoutiqueShop/public/css/layoutsite.css">
		<link href="/Boutique/public/css/fontawesome.min.css" rel="stylesheet">
	</head>
	<body style="background-color: black">
		<section class="clearfix topbar border-bottom border-dark" style="font-size: 0.8em; margin-top: -1vh;  ">
			<div class="container-fluid">
				<nav class="navbar navbar-expand-lg navbar-dark ">
					<a class="navbar-brand" href=".">
						<img src="/BoutiqueShop/public/images/logo/logo.png" width="100" height="50">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse font-weight-bold" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item active">
								<a class="nav-link" href="http://localhost/BoutiqueShop/views/pages/shop.php">SHOP <span class="sr-only">(current)</span></a>
							</li>
							
							<?php require_once '../modules/category.php'; ?>
						</ul>
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="/BoutiqueShop/admin/login.php">ACCOUNT <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="#">CART</a>
							</li>
						</ul>
						
					</div>
				</nav>
			</div>
		</section>

		<section>
			<div class="card-group">
				<div class="card">
				    <img class="card-img-top" src="..." alt="Card image cap">
				  </div>
				  <div class="card">
				    <img class="card-img-top" src="..." alt="Card image cap">
				    <div class="card-body">
				      <h5 class="card-title">Card title</h5>
				      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
				      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				    </div>
				  </div>
				  <div class="card">
				    <img class="card-img" src="/BoutiqueShop/public/images/products/product1.jpg" alt="Card image cap">
				    <div class="card-img-overlay">
				      <h5 class="card-title">PMO LEATHER CAP</h5>
				      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
				      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				    </div>
				  </div>
				</div>	
			</div>
		</section>
		

		<section class="clearfix footer text-white pt-4 pb-5 border-top border-dark mt-2 mb-5">
			<div class="container-fluid row">
				<div class="col-lg-2 col-3 font-weight-bold " style="font-size: 0.8em ">
					<a href="#" class="text-white"><p>BECOME A MEMBER</p></a>
					<a href="#" class="text-white"><p>SITE FEEDBACK</p></a>
				</div>
				<div class="col-lg-2 col-3" style="font-size: 0.8em">
					<p class=" font-weight-bold">GET HELP</p>
					<a href=""><p class="text-secondary">Delivery</p></a>
					<a href=""><p class="text-secondary">Contact Us</p></a>
				</div>
				<div class="col-lg-7 col-3" style="font-size: 0.8em">
					<p class="font-weight-bold">ABOUT US</p>
					<a href=""><p class="text-secondary">News</p></a>
				</div>
				<div class="col-lg-1 col-3 font-weight-bold" style="font-size: 0.8em">
					<a href="#" class="text-white"><p>INSTAGRAM</p></a>
					<a href="#" class="text-white"><p>FACEBOOK</p></a>
					<a href="#" class="text-white"><p>TWITTER</p></a>
					<a href="#" class="text-white"><p>YOUTUBE</p></a>
				</div>		
			</div>
		</section>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="/BoutiqueShop/public/js/jquery-3.4.1.slim.min.js"></script>
		<script src="/BoutiqueShop/public/js/popper.min.js"></script>
		<script src="/BoutiqueShop/public/js/bootstrap.min.js"></script>
	</body>
</html>