<?php
class controller extends db{
	// Fetch Info of user
	protected function fetch_admin(){
		$stmt = $this->connect()->prepare("SELECT * FROM `tbl_accounts` WHERE `acc_rand_id`=? ");
		$stmt->execute([$_COOKIE['user_id']]);
		return $stmt;
	}

	// Insert Data for Product
	protected function add_product($categories_product, $product_image, $product_type, $product_address, $product_contact,$carrier_product_name,$carrier_product_address,$carrier_product_contact, $carrier_cap ,$trade_product_name, $trade_product_address,$trade_product_contact, $trade_expected_trade, $trade_duration_date){

		// fetch info user 
		$stmt = $this->connect()->prepare("SELECT * FROM `tbl_accounts` WHERE `acc_rand_id`=? ");
		$stmt->execute([$_COOKIE['user_id']]);

		if($stmt->rowCount()==1){
			$fetch_info_user = $stmt->fetch();

			$target_dir = "uploads/";
	        $target_file = $target_dir . basename($product_image);
	        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

	        // Checking Image File Type
	        if($imageFileType !== "png" && $imageFileType !== "jpeg" && $imageFileType !=="jpg" ){
				
				$status_message = "Please select jpg, jpeg, png image file type";
				return $status_message;
	        }
	        if($categories_product == "Carrier"){
	        	$insert = $this->connect()->prepare("INSERT INTO `tbl_products`(`prod_post_user_id`, `product_post_name`, `product_categories`, `product_image`, `product_type`, `product_name`, `product_address`, `product_contact`, `carrier_cap`, `trade_expected_trade`, `trade_duration_date`,`product_availability`, `product_status`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
				$insert->execute([$fetch_info_user['acc_rand_id'],$fetch_info_user['acc_fname']." ".$fetch_info_user['acc_mname']." ".$fetch_info_user['acc_lname'], $categories_product, $product_image, $product_type, $carrier_product_name, $carrier_product_address, $carrier_product_contact, $carrier_cap, $trade_expected_trade, $trade_duration_date, "Not Available", "Pending"]);
				
				$status = 1;
				return $status;
	        }else{
        		$insert = $this->connect()->prepare("INSERT INTO `tbl_products`(`prod_post_user_id`, `product_post_name`, `product_categories`, `product_image`, `product_type`, `product_name`, `product_address`, `product_contact`, `carrier_cap`, `trade_expected_trade`, `trade_duration_date`, `product_status`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
				$insert->execute([$fetch_info_user['acc_rand_id'],$fetch_info_user['acc_fname']." ".$fetch_info_user['acc_mname']." ".$fetch_info_user['acc_lname'], $categories_product, $product_image, $product_type, $trade_product_name, $trade_product_address, $trade_product_contact, $carrier_cap, $trade_expected_trade, $trade_duration_date, "Pending"]);
				
				$status = 1;
				return $status;
	        }
			
		}
		else{
			return false;
		}

	}

	// Fetching Trade Product List
	protected function fetch_trade_poduct($type_product){
		$stmt = $this->connect()->prepare("SELECT * FROM `tbl_accounts` WHERE `acc_rand_id`=? ");
		$stmt->execute([$_COOKIE['user_id']]);
		
		if($stmt->rowCount()==1){
			$fetch_info_user = $stmt->fetch();

			switch ($type_product) {
				case 'All':
					$fethc_product = $this->connect()->prepare("SELECT * FROM `tbl_products` WHERE `prod_post_user_id`=? AND `product_categories`=? ORDER BY `product_status` DESC ");
					$fethc_product->execute([$fetch_info_user['acc_rand_id'],"Trade"]);
					return $fethc_product;
					break;
				
				default:
					$fethc_product = $this->connect()->prepare("SELECT * FROM `tbl_products` WHERE `prod_post_user_id`=? AND `product_categories`=? AND `product_type`=? ORDER BY `product_status` DESC ");
					$fethc_product->execute([$fetch_info_user['acc_rand_id'],"Trade",$type_product]);
					return $fethc_product;
					break;
			}
			
		}
	}

	// Fetching Carrier Product
	protected function fetch_carrier_poduct($type_product){
		$stmt = $this->connect()->prepare("SELECT * FROM `tbl_accounts` WHERE `acc_rand_id`=? ");
		$stmt->execute([$_COOKIE['user_id']]);
		
		if($stmt->rowCount()==1){
			$fetch_info_user = $stmt->fetch();

			switch ($type_product) {
				case 'All':
					$fethc_product = $this->connect()->prepare("SELECT * FROM `tbl_products` WHERE `prod_post_user_id`=? AND `product_categories`=? ORDER BY `product_status` DESC ");
					$fethc_product->execute([$fetch_info_user['acc_rand_id'],"Carrier"]);
					return $fethc_product;
					break;
				
				default:
					$fethc_product = $this->connect()->prepare("SELECT * FROM `tbl_products` WHERE `prod_post_user_id`=? AND `product_categories`=? AND `product_type`=? ORDER BY `product_status` DESC ");
					$fethc_product->execute([$fetch_info_user['acc_rand_id'],"Carrier",$type_product]);
					return $fethc_product;
					break;
			}
			
		}
	}

	protected function fetch_avail_product($fetch_avail_product_id){
		$stmt = $this->connect()->prepare("SELECT * FROM `tbl_products` WHERE `prod_id`=? ");
		$stmt->execute([$fetch_avail_product_id]);
		return $stmt;
	}

	protected function update_avail_status($update_avail_prod_id,$prod_avail_status){
		$stmt = $this->connect()->prepare("SELECT * FROM `tbl_accounts` WHERE `acc_rand_id`=? ");
		$stmt->execute([$_COOKIE['user_id']]);
		if($stmt->rowCount()==1){
			$fetch_info_user = $stmt->fetch();

			$update_avail_status = $this->connect()->prepare("UPDATE `tbl_products` SET `product_availability`=? WHERE `prod_id`=? AND `prod_post_user_id`=? ");
			$update_avail_status->execute([$prod_avail_status,$update_avail_prod_id,$fetch_info_user['acc_rand_id']]);

			return $update_avail_status;

		}
	}
}
?>