<img src="images/front.png" class="imageMap">

<?php include_once "templates/header.php"; ?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lobster+Two&family=Zilla+Slab:ital,wght@1,300;1,400&display=swap" rel="stylesheet"> 
 <link rel="stylesheet" href="style/Login.css">
 



	<div class="login">
	
		<h1>Login</h1>
		
			<form action="logininc.php" method="post">
				
				
				<div class="inputBox">
	

				 <img src="images/loginman.png" class="Man">	
					<input type="text" name="uid" class="guess" placeholder = "Username or email" />
	
</div>
 
				<div class="inputBox">
				
				<img src="images/pass.png" class="pass">
					<input type="password" name="pwd" class="guess" placeholder = "Password" />
			
				</div>	
	
	
	<button type="submit" >LOGIN</button>
	
	
	<p>Not a member? <a href="Signup.php">Signup!</a>
	</p>
			</div>
			<?php include_once "templates/footer.php"; ?>
