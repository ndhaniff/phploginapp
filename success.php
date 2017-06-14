<?php 
session_start();
require 'header.php';
 ?>

	<div class="row col m6 offset-m3 center">
		<h1>Success!</h1>
	</div>
	<div class="row col s12 m6 l4 offset-l4 offset-m3">
		<div class="card">
		<?php 
		if(isset($_SESSION['message']) AND !empty($_SESSION['message'])){
			echo $_SESSION['message'];
		}
		 else{
		 	header('location: index.php');
		 }
		?>
		</div>
	</div>

<?php
require 'footer';