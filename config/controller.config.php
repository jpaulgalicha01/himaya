<?php
class controller extends db{
	protected function create_acc($acc_img,$acc_fname,$acc_mname,$acc_lname,$acc_address,$acc_birth,$acc_phone,$acc_email,$acc_uname,$acc_pass){

		$stmt = $this->connect()->prepare("SELECT * FROM `tbl_accounts` WHERE `acc_uname`=?  OR `acc_email`=? ");
		$stmt->execute([$acc_uname,$acc_email]);

		if($stmt->rowCount()!==1){
			// Insert Data
			$target_dir = "uploads/";
	        $target_file = $target_dir . basename($acc_img);
	        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

	        // Checking Image File Type
	        if($imageFileType !== "png" && $imageFileType !== "jpeg" && $imageFileType !=="jpg" && $imageFileType!=="svg" ){
				
				$status_message = "Please select jpg, jpeg, png, svg image file type";
				return $status_message;
	        }

	        $insert_data = $this->connect()->prepare("INSERT INTO `tbl_accounts`(`acc_rand_id`, `acc_fname`, `acc_mname`, `acc_lname`,`acc_address`, `acc_birth`,`acc_phone`, `acc_email`, `acc_uname`, `acc_password`,`acc_profile`, `acc_type`,`acc_status`) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$insert_data->execute([rand(),$acc_fname,$acc_mname,$acc_lname,$acc_address,$acc_birth,$acc_phone,$acc_email,$acc_uname,md5($acc_pass),$acc_img,"user","Pending"]);

			if($insert_data){
				move_uploaded_file($_FILES["acc_img"]["tmp_name"], $target_file);
				
				$status = 1;
				return $status;
			}else{
				
				$status_message = "There's something wrong to add data. Please try again";
				return $status_message;
			}	

		}
		return false;
		
	}

	protected function acc_login($acc_uname,$acc_pass){
		$stmt = $this->connect()->prepare("SELECT * FROM `tbl_accounts` WHERE `acc_uname`=? AND `acc_password`=? ");
		$stmt->execute([$acc_uname,md5($acc_pass)]);

		if($stmt){
			$this->connect()->query("UPDATE `tbl_accounts` SET `acc_otp`='".rand(000000,999999)."' WHERE `acc_uname`='$acc_uname' AND `acc_password`='".md5($acc_pass)."' ");
			$fetch = $this->connect()->prepare("SELECT * FROM `tbl_accounts` WHERE `acc_uname`=? AND `acc_password`=? ");
			$fetch->execute([$acc_uname,md5($acc_pass)]);

			return $fetch;
		}
	}

	protected function verify_otp($user_id,$otp_code){
		$stmt = $this->connect()->prepare("SELECT * FROM `tbl_accounts` WHERE `acc_rand_id`=? AND `acc_otp`=? ");
		$stmt->execute([$user_id,$otp_code]);
		return $stmt;
	}

	protected function fetch_carrier_trucks(){
		$stmt = $this->connect()->prepare("SELECT * FROM `tbl_products` WHERE `product_categories`=? AND `product_type`=? AND `product_status`=? ");
		$stmt->execute(["Carrier","Trucks","Accept"]);
		return $stmt;
	}
	protected function fetch_carrier_vans(){
		$stmt = $this->connect()->prepare("SELECT * FROM `tbl_products` WHERE `product_categories`=? AND `product_type`=? AND `product_status`=? ");
		$stmt->execute(["Carrier","Vans","Accept"]);
		return $stmt;
	}

	protected function fetch_carrier_tricycle(){
		$stmt = $this->connect()->prepare("SELECT * FROM `tbl_products` WHERE `product_categories`=? AND `product_type`=? AND `product_status`=? ");
		$stmt->execute(["Carrier","Tricycles","Accept"]);
		return $stmt;
	}

	protected function view_product($prod_id){
		$stmt = $this->connect()->prepare("SELECT * FROM `tbl_products` WHERE `prod_id`=? ");
		$stmt->execute([$prod_id]);
		return $stmt;
	}
}
?>