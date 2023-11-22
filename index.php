<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Main Content -->
<div class="container-fluid py-3">
	<div class="row">
		<div class="col-12 banner1 d-flex align-items-center">
			<div class="row p-5">
				<div class="col-xl-8 col-lg-8 col-12 text-xl-start text-lg-start text-center">
					<h1 class="text-white " style="font-size: calc( 1.5rem + 1.5rem) !important;">Himaya: Agricultural Product Carrier and Trading System</h1><br>
					<a href="#categories" class="btn btn-danger">View Products</a>
				</div>
				
			</div>
		</div>
	</div>

	<div class="row pt-5"  id="categories">
		<h1 class="text-center">Categories Products</h1>
	</div>
</div>

<div class="container-fluid px-4">
	<div class="row">
		<div class="border p-2">
			<div class="col-12">
				<div id="carouselExampleIndicators" class="carousel slide">
				  <div class="carousel-indicators">
				    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
				  </div>
				  <div class="carousel-inner">

				    <div class="carousel-item active">
			    		<div class="row banner-carrier d-flex align-items-center p-5">
							<div class="row">
								<div class="col-1">
								</div>
								<div class="col-10">
									<div class="text-center">
										<h1 class="text-white" style="font-size: calc( 1rem + 1rem) !important;">Carrier</h1><br>
										<a href="carrier.php" class="btn btn-danger btn-sm">View</a>
									</div>
								</div>
								<div class="col-1">
								</div>
							</div>
			    		</div>
	  			    </div>

	  			    <div class="carousel-item">
			    		<div class="row banner-trading d-flex align-items-center p-5">
							<div class="row">
								<div class="col-1">
								</div>
								<div class="col-10">
									<div class="text-center">
										<h1 class="text-white" style="font-size: calc( 1rem + 1rem) !important;">Trading</h1>
										<a href="trade.php" class="btn btn-danger">View</a>
									</div>
								</div>
								<div class="col-1">
								</div>
							</div>
			    		</div>
	  			    </div>
				  </div>
				  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="visually-hidden">Previous</span>
				  </button>
				  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="visually-hidden">Next</span>
				  </button>
				</div>
			</div>
		</div>
	</div>
</div>
	
<?php
include 'includes/footer.php';
?>