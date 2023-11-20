<?php
class controller extends db{
	// Fetch User Information
	protected function fetch_admin($user_rand_id){
		$stmt = $this->connect()->prepare("SELECT * FROM `tbl_accounts` WHERE `acc_rand_id`=? ");
		$stmt->execute([$user_rand_id]);
		return $stmt;
	}

	protected function fetch_user_acc(){
		$stmt = $this->connect()->prepare("SELECT * FROM `tbl_accounts` WHERE `acc_type`=? ");
		$stmt->execute(["user"]);
		return $stmt;
	}

	protected function decline_user($user_id){
		$stmt = $this->connect()->prepare("UPDATE `tbl_accounts` SET `acc_status`=? WHERE `acc_rand_id`=? ");
		$stmt->execute(["Declined",$user_id]);
		return $stmt;
	}
	protected function accept_user($user_id){
		$stmt = $this->connect()->prepare("UPDATE `tbl_accounts` SET `acc_status`=? WHERE `acc_rand_id`=? ");
		$stmt->execute(["Accept",$user_id]);
		return $stmt;
	}

	protected function delete_user($user_id){
		$stmt = $this->connect()->prepare("DELETE FROM `tbl_accounts` WHERE `acc_rand_id`=? ");
		$stmt->execute([$user_id]);
		return $stmt;
	}

	protected function view_user($user_id){
		$stmt = $this->connect()->prepare("SELECT * FROM `tbl_accounts` WHERE `acc_rand_id`=? ");
		$stmt->execute([$user_id]);
		return $stmt;
	}

	protected function fetch_user_info($user_id){
		$stmt = $this->connect()->prepare("SELECT * FROM `tbl_accounts` WHERE `acc_rand_id`=? ");
		$stmt->execute([$user_id]);
		return $stmt;
	}

	protected function fetch_trade_product($value,$status){
		if($value == "All"){
			if($status== "All"){
				$stmt = $this->connect()->prepare("SELECT * FROM `tbl_products` WHERE `product_categories`=? ");
				$stmt->execute(["Trade"]);
				return $stmt;
			}else{
				$stmt = $this->connect()->prepare("SELECT * FROM `tbl_products` WHERE `product_categories`=? AND `product_status`=?");
				$stmt->execute(["Trade",$status]);
				return $stmt;
			}
	
		}else{
			if($status== "All"){
				$stmt = $this->connect()->prepare("SELECT * FROM `tbl_products` WHERE `product_categories`=? AND `product_type`=?");
				$stmt->execute(["Trade",$value]);
				return $stmt;
			}else{
				$stmt = $this->connect()->prepare("SELECT * FROM `tbl_products` WHERE `product_categories`=? AND `product_type`=? AND `product_status`=?");
				$stmt->execute(["Trade",$value,$status]);
				return $stmt;

			}
			
		}
	}
		protected function fetch_carrier_product($value,$status){
		if($value == "All"){
			if($status== "All"){
				$stmt = $this->connect()->prepare("SELECT * FROM `tbl_products` WHERE `product_categories`=? ");
				$stmt->execute(["Carrier"]);
				return $stmt;
			}else{
				$stmt = $this->connect()->prepare("SELECT * FROM `tbl_products` WHERE `product_categories`=? AND `product_status`=?");
				$stmt->execute(["Carrier",$status]);
				return $stmt;
			}
	
		}else{
			if($status== "All"){
				$stmt = $this->connect()->prepare("SELECT * FROM `tbl_products` WHERE `product_categories`=? AND `product_type`=?");
				$stmt->execute(["Carrier",$value]);
				return $stmt;
			}else{
				$stmt = $this->connect()->prepare("SELECT * FROM `tbl_products` WHERE `product_categories`=? AND `product_type`=? AND `product_status`=?");
				$stmt->execute(["Carrier",$value,$status]);
				return $stmt;

			}
			
		}
	}

	protected function view_product_id($product_id){
		$stmt = $this->connect()->prepare("SELECT * FROM `tbl_products` WHERE `prod_id`=? ");
		$stmt->execute([$product_id]);
		return $stmt;
	}

	protected function update_prod_status($prod_id,$status_prod){
		$stmt = $this->connect()->prepare("UPDATE `tbl_products` SET `product_status`=? WHERE `prod_id`=? ");
		$stmt->execute([$status_prod,$prod_id]);
		return $stmt;
	}
}
?>