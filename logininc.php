<?php

if(isset($_POST["btnLogin"])){  //check if user accessed the page the proper way by submitting the form
	
$username = $_POST["uid"]; //grab data from the url
$pwd = $_POST["pwd"];      //grab data from the url

require_once 'dbhinc.php';  //reference to php database file
require_once 'functions.php';  //reference to php function file

	if(emptyInputLogin($username,$pwd) !==false){
		header("location: Login.php?error=emptyinput");
		exit();
}

loginUser($conn, $username,$pwd);
}
else{
	header("location: homepage.html");
	exit();
	
}