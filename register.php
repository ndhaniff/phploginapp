<?php

//creating session variable 
$_SESSION['email'] = $_POST[email];
$_SESSION['first_name'] = $_POST[first_name];
$_SESSION['last_name'] = $_POST[last_name];

//escaping string in input
$first_name = $mysqli->escape_string($_POST['first_name']);
$last_name = $mysqli->escape_string($_POST['last_name']);
$email = $mysqli->escape_string($_POST['email']);

//escaping and password encryption using bcrypt (more secure)
$password = $mysqli->escape_string(password_hash($_POST['password'],PASSWORD_BCRYPT));
//create hashing for using it later
$hash = $mysqli->escape_string(md5(rand(0,1000)));

//query the db for checking user already exist or not
$result = $mysqli->query("SELECT * FROM users WHERE email='".$email."'") or die($mysqli->error);

//if table row > 0 = user allready exist
if ($result->num_rows > 0){
	$_SESSION['message'] = 'User dengan email ini sudah ada!';
	header('location: error.php');
	$result->close();
	}

//user not exist
else if ($result->num_rows == 0) {
	//insert user to db
	$sql = "INSERT INTO users (first_name,last_name,email,password,hash) VALUES ('$first_name','$last_name','$email','$password','$hash')";

	if($mysqli->query($sql)){
		$_SESSION['active'] = 0;
		$_SESSION['logged_in'] = true;
		$_SESSION['message'] = 'Link konfirmasi telah dihantar ke $email anda';

	//send to verify.php
	$to = $email;
	$subject = "Pengaktifan akaun";
	$message_body = 
	"Hello" .$first_name. 
	"terima kasih kerana mendaftar
	Sila klik link di bawah untuk mengaktifkan akaun anda:

	http://localhost/phploginapp/inc/verify.inc.php?email=".$email."&hash".$hash;

	mail($to,$subject,$message_body);

	header('location: profile.php');
	}
	else{
		$_SESSION['message'] = "Pendaftaran Gagal";
		header('location: error.php');
	}

		$result->close();
}