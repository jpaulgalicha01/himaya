<?php
class fetch extends controller{

	public function fetchAdmin(){
		$stmt = $this->fetch_admin();
		return $stmt;
	}

	public function fetchTradePoduct($type_product){
		$stmt = $this->fetch_trade_poduct($type_product);
		return $stmt;
	}

	public function fetchCarrierPoduct($type_product){
		$stmt = $this->fetch_carrier_poduct($type_product);
		return $stmt;
	}

	public function fetchAvailProduct($fetch_avail_product_id){
		$stmt = $this->fetch_avail_product($fetch_avail_product_id);

		if($stmt->rowCount()==1){
			$fetch_data = $stmt->fetch();

			$data = [
				'status' => 200,
				'data' => $fetch_data
			];
			echo json_encode($data);
			return false;
		}
		return false;
	}

}
?>