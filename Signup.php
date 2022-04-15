<img src="images/front.png" class="imageMap">

<?php include_once "templates/header.php"; ?>

 <link rel="stylesheet" href="style/Signup form.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&family=Zilla+Slab:ital,wght@1,300;1,400&display=swap" rel="stylesheet"> 
 
 
<body>

	<div class="login">
	
		<h1>Sign-up</h1>
		
			<form action="signupinc.php" method="post">
			
				<div class="inputBox">
	

				 <img src="images/id.png" class="id">	
					<input type="text" name="uid" placeholder = "Username" />
	
</div>
 
				<div class="inputBox">
				
				<img src="images/pass.png" class="pass">
					<input type="text" name="email" placeholder = "E-mail" />
			
				</div>	
				<div class="inputBox">
				
				<img src="images/mail.png" class="mail">
					<input type="password" name="pwd" placeholder = "Password" />
			
				</div>	
				
	
	<button type="submit"  name="btn">CREATE ACCOUNT</button>
	<p> Already have an account? <a href="Login.php">Login!</a>
	</p>
	
	<?php
		if(isset($_GET["error"])){
				if($_GET["error"] == "emptyinput"){
					echo "<p>Fill in all fields!</p>";
				}
				else if($_GET["error"] == "invaliduid"){
					echo"<p>Choose a proper username!<p>";
				}
				else if($_GET["error"] == "invalidemail"){
					echo"<p>Choose a proper email!<p>";
				}
				else if($_GET["error"] == "failed"){
					echo"<p>Something went wrong!<p>";
				}
				else if($_GET["error"] == "usernametaken"){
					echo"<p>Username already taken!<p>";
				}
				else if($_GET["error"] == "none"){
					echo"<p> You have signed up!<p>";
					header("Location: Login.php");
					echo"<p> You have signed up!<p>";
				}
		}
	?>
	</div>
	
<?php include_once "templates/footer.php"; ?>