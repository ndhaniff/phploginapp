<?php
session_start();

if($_SESSION['logged_in'] != 1){
	$_SESSION['message'] = "Sila log masuk untuk mengakses laman ini";
	header('location: error.php');
}
else{
	// set variable
	$firstname = $_SESSION['first_name'];
	$lastname = $_SESSION['last_name'];
	$email = $_SESSION['email'];
	$active = $_SESSION['active'];
}

require 'header.php';
?>
<h1 class="text-center text-primary">Profile Dashboard</h1>
<h2 class="text-center text-primary"><?php echo $firstname.' '.$lastname ?></h2>

<?php 
if(isset($_SESSION['message'])){
	//display once
	echo "<h2 class='text-center'>".$_SESSION['message']."</h2>";
	//turn off dont annoy user
 	unset($_SESSION['message']);
 }
 if (!$active){
 	echo
 	'<div class="well text-center">
	Akaun belum diaktifkan sila aktifkan dengan klik link di email anda!
 	<a href="logout.php">logout</a>
 	</div>';
 }
 ?>




<?php
require 'footer.php';