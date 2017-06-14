<?php 
require 'header.php';
session_start(); 
?>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(isset($_POST['register'])){
		require 'register.php';
	}
	else if(isset($_POST['login'])){
		require 'login.php';
	}
}
 ?>


	<h1 class="text-center text-primary">PHP LOGIN APP</h1>

    <div class="col-md-4 col-md-offset-4">

    <div id="alert" class="alert alert-danger collapse">
	<span class="close" data-dismiss="alert">&times</span>
   	 Sila Isi Maklumat Anda Di Bawah</div>

   	 <div class="row">
   	 	<form action="index.php" method="post" id="register">
   	 	<div class="form-group">
		    <label for="first_name">Nama Awal</label>
		    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
  		</div>
  		<div class="form-group">
		    <label for="last_name">Nama Akhir</label>
		    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Nama Akhir">
  		</div>
    	<div class="form-group">
		    <label for="email">Email address</label>
		    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
  		</div>
  		<div class="form-group">
		    <label for="password">Password</label>
		    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
  		</div>
  		<button class="btn btn-primary btn-block center-block" type="submit" id="btnsubmit" name="register">Hantar</button>
  		</form>
   	 </div>
   	 
    </div>

   <?php 
   require 'footer.php';