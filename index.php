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
   	 <div class="row">
   	 	<form action="index.php" method="post" id="register">
   	 	<div class="form-group">
		    <label for="first_name">Nama Awal</label>
		    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
  		</div>
  		<div class="form-group">
		    <label for="last_name">Nama Akhir</label>
		    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Email">
  		</div>
    	<div class="form-group">
		    <label for="email">Email address</label>
		    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
  		</div>
  		<div class="form-group">
		    <label for="password">Password</label>
		    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
  		</div>
  		<button class="btn btn-primary btn-block center-block" type="submit" name="register">Hantar</button>
  		</form>
   	 </div>
    </div>

    <footer>
    	<p>Copyright 2017 - Design by Endy Haniff 2017</p>
    </footer>
</body>
</html>