<?php

if(isset($_POST["btn"])){   //checks if the button is clicked
	
	$username = $_POST["uid"];
	$email = $_POST["email"];
	$pwd = $_POST["pwd"];

	require_once 'dbhinc.php';
	require_once 'functions.php';
	
	if(emptyInputSignup($username,$email,$pwd) !==false){
		header("Location: signup.php?error=emptyinput");
		exit();
}
	if(invalidUid($username) !==false){
		header("Location: signup.php?error=invaliduid");
		exit();
}
	if(invalidEmail($email) !==false){
		header("Location: signup.php?error=invalidemail");
		exit();
}

	if(uidExists($conn,$username,$email) !== false){
		header("Location: signup.php?error=usernametaken");
		exit();
}

createUser($conn, $username, $email, $pwd);
}
else{
header("Location: Login.php");
	exit();}
