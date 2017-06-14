<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "phplogin";

$mysqli = new mysqli($dbhost,$dbuser,$dbpass,$dbname) or die ($mysqli->error);