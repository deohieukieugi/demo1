
 
<section class="clearfix topbar border-bottom border-dark" style="font-size: 0.8em; margin-top: -1vh;  ">
	<div class="container-fluid">
		<nav class="navbar navbar-expand-lg navbar-dark ">
			<a class="navbar-brand" href=".">
				<img src="./public/images/logo/logo.png" width="100" height="50">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse font-weight-bold" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="views/pages/shop.php">SHOP <span class="sr-only">(current)</span></a>
					</li>
					
					<?php require_once 'modules/category.php'; ?>
				</ul>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="/BoutiqueShop/views/pages/login.php">ACCOUNT <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#">CART</a>
					</li>
				</ul>
				
			</div>
		</nav>
	</div>
</section>