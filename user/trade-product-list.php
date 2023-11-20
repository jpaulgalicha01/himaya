<?php
include 'includes/autoload.inc.php';

unset($_SESSION['title']);
$_SESSION['title'] = "Trade Products";

include 'includes/header.php';

?>
<main>
	<div class="container-fluid px-4">
        <h1 class="mt-4">Trade Product List</h1>
        <br>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                List of products
            </div>
            <div class="card-body">
            	<div class="d-flex justify-content-start">
            		<div class="col-3 pb-3">
            			<label for="type_product">Type of Product :</label>
	            		<select class="form-select" id="type_product">
		            		<option selected>All</option>
                            <option>Vegetables</option>
		            		<option>Poultry</option>
		            		<option>Other Items</option>
		            	</select>
	            	</div>
            	</div>
            	<div class="table-responsive">
                    <table class="table table-light table-striped"  id="result">

                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    $(document).ready(function(){
        $("#type_product").change(function(){
            var type_product = $(this).val();
            // alert(value);    

            $.ajax({
                type:"GET",
                url:"fetchTradeProductList.php",
                data:{type_product:type_product, function:"fetching_trade_product"},
                success:function(response){
                    $("#result").html(response);
                }
            })
        });
        $("#type_product").trigger("change");
    })
</script>
<?php
include 'includes/footer.php';
?>
