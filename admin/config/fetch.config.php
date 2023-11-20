<?php
class fetch extends controller{
	public function fetchAdmin($user_rand_id){
		$stmt = $this->fetch_admin($user_rand_id);
		return $stmt;
	}

	public function fetchUserAcc(){
		$stmt = $this->fetch_user_acc();
		return $stmt;
	}

	public function viewUser($user_id){
		$stmt = $this->view_user($user_id);

		if($stmt->rowCount()){
			$fetch_info = $stmt->fetch();

			$data = [
				'status' => 200,
				'data' => $fetch_info,
			];
			echo json_encode($data);
			return false;
		}else{
			return false;
		}
	}

	public function fetchUserTnfo($user_id){
		$stmt = $this->fetch_user_info($user_id);
		return $stmt;
	}

	public function fetchTradeProduct($value,$status){
		$stmt = $this->fetch_trade_product($value,$status);
		return $stmt;
	}

	public function fetchCarrierProduct($value,$status){
		$stmt = $this->fetch_carrier_product($value,$status);
		return $stmt;
	}

	public function viewProductId($product_id){
		$stmt = $this->view_product_id($product_id);

		if($stmt->rowCount()){
			$fetch = $stmt->fetch();

			$data = [
				'status'=> 200,
				'data' => $fetch
			];

			echo json_encode($data);
			return false;
		}
	}
}
?>