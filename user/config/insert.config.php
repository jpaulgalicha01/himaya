<?php
class insert extends controller{
	public function addProduct($categories_product, $product_image, $product_type, $product_address, $product_contact,$carrier_product_name,$carrier_product_address,$carrier_product_contact, $carrier_cap ,$trade_product_name, $trade_product_address,$trade_product_contact, $trade_expected_trade, $trade_duration_date){
		$stmt = $this->add_product($categories_product, $product_image, $product_type, $product_address, $product_contact,$carrier_product_name,$carrier_product_address,$carrier_product_contact, $carrier_cap ,$trade_product_name, $trade_product_address,$trade_product_contact, $trade_expected_trade, $trade_duration_date);

		if($stmt){
			switch ($stmt) {
				case '1':
					if($categories_product == "Carrier"){
						$_SESSION['alert'] = "Show";
						$_SESSION['icon'] = "success";
						$_SESSION['title_alert'] = "Successfully insert Data";
						ob_end_flush(header("Location: carrier-product-list.php"));	
					}else{
						$_SESSION['alert'] = "Show";
						$_SESSION['icon'] = "success";
						$_SESSION['title_alert'] = "Successfully insert Data";
						ob_end_flush(header("Location: trade-product-list.php"));	
					}

					break;
				
				default:
					$_SESSION['alert'] = "Show";
					$_SESSION['icon'] = "info";
					$_SESSION['title_alert'] = $stmt;
					ob_end_flush(header("Location:".$_SERVER['HTTP_REFERER'].""));
					break;
			}
		}else{
			$_SESSION['alert'] = "Show";
			$_SESSION['icon'] = "Error";
			$_SESSION['title_alert'] = "There's Something Wrong. Please try Again";
			ob_end_flush(header("Location:".$_SERVER['HTTP_REFERER'].""));
		}

		
	}
		
}
?>