<?php
class update extends controller{
	public function updateAvailStatus($update_avail_prod_id,$prod_avail_status){
		$stmt = $this->update_avail_status($update_avail_prod_id,$prod_avail_status);

		if($stmt){
			$_SESSION['alert'] = "Show";
			$_SESSION['icon'] = "success";
			$_SESSION['title_alert'] = "Successfully insert Data";
			ob_end_flush(header("Location:".$_SERVER['HTTP_REFERER'].""));
	
		}
		$_SESSION['alert'] = "Show";
		$_SESSION['icon'] = "Error";
		$_SESSION['title_alert'] = "There's Something Wrong. Please try Again";
		ob_end_flush(header("Location:".$_SERVER['HTTP_REFERER'].""));
	}
}
?>