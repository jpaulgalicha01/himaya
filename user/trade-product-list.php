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

<!-- Modal -->
<div class="modal fade" id="update_avail_product" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="product_name">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="inputConfig.php" method="POST">
        <input type="hidden" name="function" value="update_avail_prod">
        <input type="hidden" name="update_avail_prod_id" id="update_avail_prod_id">
            <div class="modal-body">
                <label for="prod_avail_status">Availability Status:</label>
                <select class="form-select" id="prod_avail_status" name="prod_avail_status">
                    <option>Not Available</option>
                    <option>Available</option>
                </select>
           </div>
           <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="update_avail_prod">Save changes</button>
           </div>
      </form>

    </div>
  </div>
</div>

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
    });

        $(document).on("click","#update_avail",function(){
        var value = $(this).val();
        // alert(value);
        $.ajax({
            type:"POST",
            url:"inputConfig.php",
            data:{value:value, function:"fetch_avail_product"},
            success:function(result){
                var res = jQuery.parseJSON(result);

                if(res.status == 200){
                    $("#update_avail_product").modal("show");
                    $("#update_avail_prod_id").val(res.data.prod_id);
                    $("#product_name").text(res.data.product_name);
                    $("#prod_avail_status").val(res.data.product_availability);
                }else{
                    console.log("There's Something Wrong to Fethcing Data");
                }
            }
        });
    });
</script>
<?php
include 'includes/footer.php';
?>
