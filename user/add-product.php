<?php
include 'includes/autoload.inc.php';

unset($_SESSION['title']);
$_SESSION['title'] = "Add Product";

include 'includes/header.php';

?>

<main>
	<div class="container-fluid px-4">
		<div class="row">
			        <h1 class="mt-4">Add Product</h1>
        <br>
	        <div class="card mb-4">
	            <div class="card-header">
	                Information Of Product
	            </div>
	            <div class="card-body">
	            	<form action="inputConfig.php" method="POST" enctype="multipart/form-data">
	            		<input type="hidden" name="function" value="add_product">
	            		<label for="categories">Categories :</label>
	            		<select id="categories" class="form-select" name="categories_product">
	            			<option selected>Carrier</option>
	            			<option>Trade</option>
	            		</select>
	            		<div class="py-2">
						  <label for="formFile" class="form-label">Image of Product:</label>
						  <input class="form-control" type="file" name="product_image" id="formFile" accept=".jpg, .jpeg, .png" required>
	            		</div>
	            		<div id="carrier">
	            			<div class="py-2">
	            				<label for="carrier_prod_type">Product Type:</label>
	            				<select class="form-select" name="product_type" id="carrier_prod_type">
	            					<option selected disabled value="">---Please Select---</option>
	            					<option>Trucks</option>
	            					<option>Vans</option>
	            					<option>Tricycles</option>
	            				</select>
	            			</div>
	            			<div class="py-2">
	            				<label>Brand Name:</label>
	            				<input type="text" name="carrier_product_name" id="carrier_name_prod" class="form-control" placeholder="ex. toyota, Bajaj, Samsung, Nokia, ect.." required />
	            			</div>
	            			<div class="py-2">
	            				<label>Capacity:</label>
	            				<input type="text" name="carrier_cap" id="carrier_cap" class="form-control" placeholder="lbs/Kgs." required />
	            			</div>
	            			<div class="py-2">
	            				<label>Address:</label>
	            				<input type="text" name="carrier_product_address" id="carrier_address" class="form-control" placeholder="(purok/street, Barangay, city/municipality, province)" required />
	            			</div>
	            			<div class="py-2">
	            				<label>Phone Number:</label>
	            				<input type="tel" name="carrier_product_contact" id="carrier_phone" class="form-control" pattern="[0-9]{11}" placeholder="09xxxxxxxxx" required />
	            			</div>
	            		</div>
	            		<div id="trade">
	        				<div class="py-2">
	        					<label for="carrier_prod_type">Product Type:</label>
		        				<select class="form-select" name="product_type" id="trade_prod_type">
		        					<option selected disabled value="">---Please Select---</option>
		        					<option>Vegetables</option>
		        					<option>Poultry</option>
		        					<option>Other Items</option>
		        				</select>
	        				</div>
	            			<div class="py-2">
	            				<label>Name of Product:</label>
	            				<input type="text" name="trade_product_name" id="trade_name" class="form-control" placeholder="ex. Clothes, Shoes, ect..">
	            			</div>
	            			<div class="py-2">
	            				<label>Expected Trade:</label>
	            				<input type="text" name="trade_expected_trade" id="trade_expected_trade" class="form-control" placeholder="ex. Prefer item want to trade.">
	            			</div>
	            			<div class="py-2">
	            				<label>Duration of Product:</label>
	            				<input type="date" name="trade_duration_date" id="trade_duration_date" class="form-control">
	            			</div>
	            			<div class="py-2">
	            				<label>Address:</label>
	            				<input type="text" name="trade_product_address" id="trade_address" class="form-control" placeholder="(purok/street, Barangay, city/municipality, province)">
	            			</div>
	            			<div class="py-2">
	            				<label>Phone Number:</label>
	            				<input type="tel" name="trade_product_contact" id="trade_phone" class="form-control" pattern="[0-9]{11}" placeholder="09xxxxxxxxx">
	            			</div>
	            		</div>
	            		 <button class="btn btn-success btn-sm" type="submit" name="add_product">Submit</button>
	            	</form>
	    		</div>
	    	</div>
		</div>
    </div>
</main>

<script>
	$(document).ready(function(){
		$("#categories").change(function(){
			var value = $(this).val();

			if(value == "Trade"){
				$("#carrier").css("display","none");
				$("#trade").css("display","block");

				$("#trade_prod_type").attr("required", true);
				$("#trade_name").attr("required", true);
				$("#trade_expected_trade").attr("required", true);
				$("#trade_duration_date").attr("required", true);
				$("#trade_address").attr("required", true);
				$("#trade_phone").attr("required", true);

				$("#carrier_prod_type").attr("required", false);
				$("#carrier_name_prod").attr("required", false);
				$("#carrier_cap").attr("required", false);
				$("#carrier_address").attr("required", false);
				$("#carrier_phone").attr("required", false);
			}else{
				$("#trade").css("display","none");
				$("#carrier").css("display","block");

				$("#trade_prod_type").attr("required", false);
				$("#trade_name").attr("required", false);
				$("#trade_expected_trade").attr("required", false);
				$("#trade_duration_date").attr("required", false);
				$("#trade_address").attr("required", false);
				$("#trade_phone").attr("required", false);

				$("#carrier_prod_type").attr("required", true);
				$("#carrier_name_prod").attr("required", true);
				$("#carrier_cap").attr("required", true);
				$("#carrier_address").attr("required", true);
				$("#carrier_phone").attr("required", true);
			}
		});
		$("#categories").trigger("change");
	});
</script>

<?php
include 'includes/footer.php';
?>
