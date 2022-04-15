<?php

//for signup
function emptyInputSignup($username,$email,$pwd) {
	$result;
	if(empty($username) || empty($email) || empty($pwd)){
		$result = true;
	}
	else{
		$result = false;
}
	return $result;
}
function invalidUid($username) {
	$result;
	if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
		$result = true;
	}
	else{
		$result = false;
}
	return $result;
}

function invalidEmail($email) {
	$result;
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$result = true;
	}
	else{
		$result = false;
}
	return $result;
}

function uidExists($conn,$username) {
	$result = true;
	$sql = "SELECT * FROM users WHERE usersUid = ?;"; //statement
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt,$sql)){
		header("location: signup.php?error=failed");
		exit();
}

mysqli_stmt_bind_param($stmt, "s",$username);
mysqli_stmt_execute($stmt);

$resultData= mysqli_stmt_get_result($stmt);

if($row = mysqli_fetch_assoc($resultData)){
	return $row;
	

}
else{
	$result =false;
	return $result;
}
mysqli_stmt_close($stmt);
}
	
	
	
function createUser($conn, $username, $email, $pwd) {
$sql = 'INSERT INTO users(usersUid,usersEmail,usersPwd) VALUES (?,?,?)';

	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt,$sql)){
		header("location: Signup.php?error=failed");
		exit();
	}


mysqli_stmt_bind_param($stmt, 'sss',$username,$email,$pwd);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
header("location: Signup.php?error=none");
		exit();
}


function emptyInputLogin($username,$pwd) {
	if(empty($username) || empty($pwd)){
		$result = true;
	}
	else{
		$result = false;
}
	return $result;
}
function loginUser($conn, $username,$pwd) {
	$uidExists = uidExists($conn,$username);  //variable 
	
//checks if the users username or email already exists in database.
	if($uidExists === false){
		header("location: Login.php?error=stmtfailed"); 
		exit();
	}
	
$checkPwd = password_verify($pwd, $usersPwd);

if($checkPwd === false) {
	header("location: Login.php?error=wronglogin"); 
		exit();
}
else if($checkPwd === true){
		
	session_start();
	$_SESSION["userid"] = $uidExists["usersId"]; 
	$_SESSION["useruid"] = $uidExists["usersUId"]; 
	header("location: homepage.html");
		exit();
}}