<?php
include 'includes/autoload.inc.php';

$logout = new insert();
$res = $logout->logoutUser();
if($res->rowCount()){
	session_unset();
	session_destroy();
	setcookie("user_id",NULL, time()-3600, '/himaya');
	setcookie("user_type",NULL, time()-3600, '/himaya');
	ob_end_flush(header("Location: ../login.php"));
}



