<?php
$email = $mysqli->escape_string($_POST['email']);
$result = $mysqli->query('SELECT * FROM users WHERE email = "'.$email.'"');

if($result->num_rows == 0){
	$_SESSION['message'] = "user tidak wujud dalam server ini";
	header('location: error.php');
}
else{
	//fetch result as associative array
	$pengguna = $result->fetch_assoc();

	// check password and set session variable
	if(password_verify($_POST['password'],$pengguna['password'])){
	$_SESSION['first_name'] = $pengguna['first_name'];
	$_SESSION['last_name'] = $pengguna['last_name'];
	$_SESSION['email'] = $pengguna['email'];
	$_SESSION['active'] = $pengguna['active'];
	$_SESSION['login'] = $pengguna['login'];

	header('location: profile.php');
}

else{
	$_SESSION['message']="Password yang dimasukkan salah";
	header('location: error.php');
}
}