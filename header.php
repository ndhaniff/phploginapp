<?php 
require './inc/db.php'
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/united/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Php Login App</title>
</head>
<body>

    <header>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" id="brand">PhpLoginApp</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#" id="home">Home</a></li>
            <li><a href="#login" id="logintab">Login</a></li>
            <li><a href="#register" id="registertab">Register</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    </header>