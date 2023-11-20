<?php
class update extends controller{
	public function declineUser($user_id){
		$stmt = $this->decline_user($user_id);
		if($stmt){
			$_SESSION['declined_user_id'] = $user_id;
			$_SESSION['alert'] = "Show";
			$_SESSION['icon'] = "success";
			$_SESSION['title_alert'] = "Successfully Updated";
			ob_end_flush(header("Location: ".$_SERVER['HTTP_REFERER'].""));
		}
	}
	public function acceptUser($user_id){
		$stmt = $this->accept_user($user_id);
		if($stmt){
			$_SESSION['accept_user_id'] = $user_id;
			$_SESSION['alert'] = "Show";
			$_SESSION['icon'] = "success";
			$_SESSION['title_alert'] = "Successfully Updated";
			ob_end_flush(header("Location: ".$_SERVER['HTTP_REFERER'].""));
		}
	}

	public function updateProdStatus($prod_id,$status_prod){
		$stmt = $this->update_prod_status($prod_id,$status_prod);

		if(!$stmt){
			$_SESSION['alert'] = "Show";
			$_SESSION['icon'] = "error";
			$_SESSION['title_alert'] = "There's Somthing Wrong. Please try againg";
			ob_end_flush(header("Location: ".$_SERVER['HTTP_REFERER'].""));
		}else{
			$_SESSION['alert'] = "Show";
			$_SESSION['icon'] = "success";
			$_SESSION['title_alert'] = "Successfully Updated";
			ob_end_flush(header("Location: ".$_SERVER['HTTP_REFERER'].""));
		}

	}
}
?>