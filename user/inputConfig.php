<?php
include 'includes/autoload.inc.php';

if($_SERVER['REQUEST_METHOD'] == "POST" || $_SERVER['REQUEST_METHOD'] == "GET" ){
	if(isset($_POST['add_product']) && $_POST['function'] == "add_product"){
		$categories_product = secured($_POST['categories_product']);
		$product_image = secured($_POST['product_image']);

		$product_type = secured($_POST['product_type']);
		

		//carrier 
		$carrier_product_name = secured($_POST['carrier_product_name']);	
		$carrier_product_address = secured($_POST['carrier_product_address']);
		$carrier_product_contact = secured($_POST['carrier_product_contact']);
		$carrier_cap = secured($_POST['carrier_cap']);


		// Trade
		$trade_product_name = secured($_POST['trade_product_name']);	
		$trade_product_address = secured($_POST['trade_product_address']);
		$trade_product_contact = secured($_POST['trade_product_contact']);
		$trade_expected_trade = secured($_POST['trade_expected_trade']);
		$trade_duration_date = secured($_POST['trade_duration_date']);

		$add_product = new insert();
		$add_product->addProduct($categories_product, $product_image, $product_type, $product_address, $product_contact,$carrier_product_name,$carrier_product_address,$carrier_product_contact, $carrier_cap ,$trade_product_name, $trade_product_address,$trade_product_contact, $trade_expected_trade, $trade_duration_date);
	}elseif(isset($_POST['value']) && $_POST['function']=="fetch_avail_product"){
		$fetch_avail_product_id = secured($_POST['value']);

		$fetch_avail_product = new fetch();
		$fetch_avail_product->fetchAvailProduct($fetch_avail_product_id);
	}elseif(isset($_POST['update_avail_prod']) && $_POST['function'] == "$_POST['update_avail_prod']"){
		$update_avail_prod_id = secured($_POST['update_avail_prod_id']);
		$prod_avail_status = secured($_POST['prod_avail_status']);

		$update_avail_status = new update();
		$update_avail_status->updateAvailStatus($update_avail_prod_id,$prod_avail_status);
	}else{
		ob_end_flush(header("Location: indes.php"));
	}
}else{
	return false;
}
?>