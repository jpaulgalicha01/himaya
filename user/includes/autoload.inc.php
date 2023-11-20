<?php
include 'config/security.php';

spl_autoload_register("Autoload");

function Autoload($classname){
	$path = "config/";
	$extenstion = ".config.php";
	$full_path = $path . $classname . $extenstion;

	if(!file_exists($full_path)){
		return false;
	}
	include_once $full_path;
}

// Fetch Information Admin

$user_fname = "";
$user_mname = "";
$user_lname = "";
$user_profile = "";

$fetch_admin = new fetch();
$res_fetch_admin = $fetch_admin->fetchAdmin();
if($res_fetch_admin->rowCount()){
	$fetch_info_admin = $res_fetch_admin->fetch();

	$user_fname = $fetch_info_admin['acc_fname'];
	$user_mname = $fetch_info_admin['acc_mname'];
	$user_lname = $fetch_info_admin['acc_lname'];
	$user_profile = $fetch_info_admin['acc_profile'];
}