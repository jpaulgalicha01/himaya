<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>

<div class="container-fluid">
	<div class="row">
	  <div class="col-xl-2 col-lg-2 col-md-2 col-3">
	    <div id="simple-list-example" class="d-flex flex-column gap-2 simple-list-example-scrollspy ">
	      <h6>Trade</h6>
	      <a class="p-1 links" href="#vegetables">Vegetables</a>
	      <a class="p-1 links" href="#poultry">Poultry</a>
	      <a class="p-1 links" href="#other_items">Other items</a>
	    </div>
	  </div>
	  <div class="col-xl-10 col-lg-10 col-md-10 col-9">
	    <div data-bs-spy="scroll" data-bs-target="#simple-list-example" data-bs-offset="0" data-bs-smooth-scroll="true" class="scrollspy-example px-4" tabindex="0" style="height: 100%; min-height:530px; max-height:auto; width: auto; overflow-y: scroll;">
	      <h4 id="vegetables">Vegetables</h4>
	      	<div class="row">
	      		<div class="col-xl-3 col-lg-3 col-md-4 col-12 py-xl-2 py-lg-2 py-md-3 py-3">
					<div class="card p-2 d-flex zoom">
						<img src="images/himaya-logo.png" width="50%" style="height:50%;min-height: 50px;"class="align-self-center">
						<hr>	
						<div class="card-body">
							<h5 class="card-title">Vegetables</h5>
							<button type="btn" class="btn btn-danger btn-sm" id="prod_id">See more..</button>
						</div>
					</div>
				</div>
	      	</div>
	      <h4 id="poultry">Poultry</h4>
	      <h4 id="other_items">Other Items</h4>
	    </div>
	  </div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Title Product</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
	        	<div class="row">
		        		<div class="col-xl-4 col-lg-4 col-md-4 col-12 text-center">
		        			<img src="images/himaya-logo.png" width="50%" style="height:auto; max-height: 250px;">
		        		</div>
		        		<div class="col-xl-8 col-lg-8 col-md-8 col-12 shadow-sm rounded">
		        			<div class="py-2">
		        				<h4>Owner of Product</h4>
		        				<h6>Name: </h6><span>Name Name Name</span>
		        				<h6>Contact: </h6><span>09000000000</span><br>
		        				<h6>Status: <small class="bg-success px-1 rounded text-white"><i>Available</i></small></h6>
		        			</div>
		        		</div>
		        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
	$(document).on("click","#prod_id",function(){
		// alert("asd");
		$("#exampleModal").modal("show");
	})
</script>
<?php
include 'includes/footer.php';
?>