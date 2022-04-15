<?php

$serverName = "localhost";
$dBUserName = "root";
$dBPassword = "root12345";
$dBName= "phpprojects01";

$conn = mysqli_connect($serverName,$dBUserName ,$dBPassword,$dBName);  //connection to database

if(!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	
}