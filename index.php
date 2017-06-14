<?php 
require 'header.php';
session_start(); 
?>
<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

	if(isset($_POST['hantar'])){
		require 'register.php';
	}
	else if(isset($_POST['login'])){
		require 'login.php';
	}
}
 ?>



<!-- REGISTER FORM -->
	<h1 class="text-center text-primary">PHP LOGIN APP</h1>

	<div class="text-center" id="welcome">
		<h2 class="text-center">Selamat Datang!</h2>
		<p>Sila Log Masuk <a href="#login" id="login1">sini</a> atau Daftar di <a href="#register" id="register1">sini</a></p>
	</div>
    <div class="col-md-4 col-md-offset-4">   

   	 <div class="row">
   	 	<form action="index.php" method="post" id="registerform">
   	 	<div class="form-group">
		    <label for="first_name">Nama Awal</label>
		    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
  		</div>
  		<div class="form-group">
		    <label for="last_name">Nama Akhir</label>
		    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Nama Akhir">
  		</div>
    	<div class="form-group">
		    <label for="email">Email</label>
		    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
  			<span id="erroremail" style="color:red">Sila Masukkan Email Anda</span>
  		</div>
  		<div class="form-group">
		    <label for="password">Password</label>
		    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
		    <span id="errorpassword" style="color:red"></span>
  		</div>
  		<button class="btn btn-primary btn-block center-block" type="submit" id="btnSubmit" name="hantar">Hantar</button>
  		</form>
   	 </div>
   	 
    </div>

<!-- LOGIN FORM -->
<div class="col-md-4 col-md-offset-4" id="login">
<div class="row">
	<form action="index.php" method="post">
		<div class="form-group">
		    <label for="email">Email</label>
		    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
  			<span id="erroremail1" style="color:red">Sila Masukkan Email Anda</span>
  		</div>
  		<div class="form-group">
		    <label for="password">Password</label>
		    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
		    <span id="errorpassword1" style="color:red"></span>
  		</div>
		<button class="btn btn-primary btn-block center-block" type="submit" id="btnlogin" name="login">Log Masuk</button>
	</form>
</div>
</div>

   <?php 
   require 'footer.php';