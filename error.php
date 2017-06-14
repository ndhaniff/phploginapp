<?php 
include 'header.php';
session_start();
 ?>

	<div class="text-center text-primary">
		<h1>Ralat</h1>
	<div>
	 <?php 
	 if (isset($_SESSION['message']) AND !empty($_SESSION['message'])){
	 	echo "<p>".$_SESSION['message']."</p>";
	 }
	 else {
	 	header('location: index.php');
	 }
	  ?>	
	</div>
	</div>


 <?php 
  require 'footer.php';

