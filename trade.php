<?php
include 'includes/autoload.inc.php';
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
	    <div data-bs-spy="scroll" data-bs-target="#simple-list-example" data-bs-offset="0" data-bs-smooth-scroll="true" class="scrollspy-example px-4" tabindex="0" style="height: 100%; min-height: 555px; max-height:560px; max-height:auto; width: auto; overflow-y: scroll;">
	      <h5 id="vegetables">*Vegetables*</h5>
	      	<div class="row">
			      	<?php
			      		$fetch_trade_vege = new fetch();
			      		$res_vege = $fetch_trade_vege->fetchTradeVegetables();

			      		if($res_vege->rowCount()>0){
			      				while ($row_vege = $res_vege->fetch()) {
			      				?>
						      		<div class="col-xl-3 col-lg-3 col-md-4 col-12 py-xl-2 py-lg-2 py-md-3 py-3" style="cursor: pointer;">
												<div class="card p-2 d-flex zoom">
													<img data-src="uploads/<?=$row_vege['product_image']?>" width="130" style="height:auto;min-height: 150px;"class="align-self-center lazy-load">
													<hr>	
													<div class="card-body">
														<h5 class="card-title"><?=$row_vege['product_name']?></h5>
														<button type="button" class="btn btn-danger btn-sm" id="prod_id" value="<?=$row_vege['prod_id']?>">See more..</button>
													</div>
												</div>
											</div>
			      				<?php
			      			}
			      		}
			      	?>
	      	</div>
	      <h5 id="poultry">*Poultry*</h5>
	      	<div class="row">
			      	<?php
			      		$fetch_trade_poul = new fetch();
			      		$res_poul = $fetch_trade_poul->fetchTradePoultry();

			      		if($res_poul->rowCount()>0){
			      				while ($row_poul = $res_poul->fetch()) {
			      				?>
						      		<div class="col-xl-3 col-lg-3 col-md-4 col-12 py-xl-2 py-lg-2 py-md-3 py-3" style="cursor: pointer;">
												<div class="card p-2 d-flex zoom">
													<img data-src="uploads/<?=$row_poul['product_image']?>" width="130" style="height:auto;min-height: 150px;"class="align-self-center lazy-load">
													<hr>	
													<div class="card-body">
														<h5 class="card-title"><?=$row_poul['product_name']?></h5>
														<button type="button" class="btn btn-danger btn-sm" id="prod_id" value="<?=$row_poul['prod_id']?>">See more..</button>
													</div>
												</div>
											</div>
			      				<?php
			      			}
			      		}
			      	?>
	      	</div>
	      <h5 id="other_items">*Other Items*</h5>
	      	<div class="row">
			      	<?php
			      		$fetch_trade_other_item = new fetch();
			      		$res_other_item = $fetch_trade_other_item->fetchTradeOtherItems();

			      		if($res_other_item->rowCount()>0){
			      				while ($row_other_items = $res_other_item->fetch()) {
			      				?>
						      		<div class="col-xl-3 col-lg-3 col-md-4 col-12 py-xl-2 py-lg-2 py-md-3 py-3" style="cursor: pointer;">
												<div class="card p-2 d-flex zoom">
													<img data-src="uploads/<?=$row_other_items['product_image']?>" width="130" style="height:auto;min-height: 150px;"class="align-self-center lazy-load">
													<hr>	
													<div class="card-body">
														<h5 class="card-title"><?=$row_other_items['product_name']?></h5>
														<button type="button" class="btn btn-danger btn-sm" id="prod_id" value="<?=$row_other_items['prod_id']?>">See more..</button>
													</div>
												</div>
											</div>
			      				<?php
			      			}
			      		}
			      	?>
	      	</div>
	    </div>
	  </div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="viewProduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><span id="brand_name"></span> (<span id="product_type"></span>)</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
	        	<div class="row">
		        		<div class="col-xl-4 col-lg-4 col-md-12 col-12 text-center">
		        			<div id="prod_img"></div>
		        		</div>
		        		<div class="col-xl-8 col-lg-8 col-md-12 col-12 shadow-sm rounded">
		        			<div class="py-2">
		        				<h4>Owner of Product</h4>
		        				<h6>Name: </h6><span id="owner_name"></span>
		        				<h6>Expected Trade: </h6><span id="expected_trade"></span>
		        				<h6>Duration Date: </h6><span id="duration_trade"></span>
		        				<h6>Contact: </h6><span id="owner_contact"></span><br>
		        				<h6>Address: </h6><span id="owner_address"></span><br>
		        				<h6>Status: <span id="product_availability"></span></h6>
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

		$(function() {
          $('.lazy-load').lazy({
		        beforeLoad: function(element) {
		            var imageSrc = element.data('src');
		            console.log('image "' + imageSrc + '" is about to be loaded');
		        },
		        scrollDirection: 'vertical',
		        effect: "fadeIn",
		        effectTime: 1000,
		        threshold: 0
			    });
    });

		$(document).on("click","#prod_id",function(){
		var prod_id = $(this).val();
		// alert(prod_id);
		$.ajax({
			type:"POST",
			url: "inputConfig.php",
			data: {prod_id:prod_id, function:"view_products"},
			success:function(response){
				var res = jQuery.parseJSON(response);
				if(res.status == 200){
						const event = moment(res.data.trade_duration_date).format('MMMM-DD-YYYY');
						// alert(event);

						$("#viewProduct").modal("show");
						$("#brand_name").text(res.data.product_name);
						$("#product_type").text(res.data.product_type);
						$("#prod_img").html("<img src='uploads/"+res.data.product_image+"' width='220px' height='250px'>")
						$("#owner_name").text(res.data.product_post_name);
						$("#expected_trade").text(res.data.trade_expected_trade);
						$("#duration_trade").text(event);
						$("#owner_contact").text(res.data.product_contact);
						$("#owner_address").text(res.data.product_address);
						if(res.data.product_availability == "Not Available"){
							$("#product_availability").html("<small class='bg-danger px-1 rounded text-white'><i>Not Available</i></small>")
						}else{
							$("#product_availability").html("<small class='bg-success px-1 rounded text-white'><i>Available</i></small>")
						}
				}else{
					console.log("There's Something in Fetching Data");
				}
			}
		});
	});
</script>
<?php
include 'includes/footer.php';
?>