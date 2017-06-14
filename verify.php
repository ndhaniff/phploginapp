<?php
require 'inc/db.php';
session_start();

//get email and hash and escape string
if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
	$email = mysqli->escape_string($_GET['email']);
	$hash = mysqli->escape_string($_GET['hash']);

	// check if already verify
	$result = mysqli->query("SELECT * FROM users WHERE email='$email' AND hash='$hash' AND active = '0'");

	if($result->num_rows == 0){
		$_SESSION['message'] = "Your Account Has Already Activated";
		header('location: error.php')
	}
	//change active status
	else{
		$_SESSION['message']="Congratulation your account has been activated!";
		// change active to 1
		mysqli->query("UPDATE users SET active = '1' WHERE email = '$email'") or die(mysqli->error);
		$_SESSION['active'] = 1;
		header('location: success.php');
	}
}