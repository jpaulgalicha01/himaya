<?php
include 'includes/autoload.inc.php';

if($_SERVER['REQUEST_METHOD'] == "POST" || $_SERVER['REQUEST_METHOD'] == "GET"){
	if(isset($_REQUEST['declined_user'])){
		$user_id = secured($_REQUEST['declined_user']);

		$decline_user = new update();
		$decline_user->declineUser($user_id);
	}elseif(isset($_REQUEST['accept_user'])){
		$user_id = secured($_REQUEST['accept_user']);

		$accept_user = new update();
		$accept_user->acceptUser($user_id);
	}elseif(isset($_REQUEST['delete_user'])){
		$user_id = secured($_REQUEST['delete_user']);

		$delete_user = new delete();
		$delete_user->deleteUser($user_id);
	}elseif(isset($_POST['value']) && $_POST['function'] == "view_user"){
		$user_id = secured($_POST['value']);

		$view_user = new fetch();
		$view_user->viewUser($user_id);
	}elseif(isset($_POST['delete_user_acc']) && $_POST['function']=="delete_user_acc"){
		$user_id = secured($_POST['user_id']);

		$delete_user = new delete();
		$delete_user->deleteUser($user_id);
	}elseif(isset($_POST['update_prod_status']) && $_POST['function']=="update_prod_status"){
		$prod_id = secured($_POST['prod_id']);
		$status_prod = secured($_POST['status_prod']);

		$update_prod_status = new update();
		$update_prod_status->updateProdStatus($prod_id,$status_prod);
	}elseif(isset($_REQUEST['prod_id'])){
		$product_id = secured($_REQUEST['prod_id']);

		$view_product_id = new fetch();
		$view_product_id->viewProductId($product_id);
	}else{
		ob_end_flush(header("Location: index.php"));
	}
}else{
	return false;
}

?>