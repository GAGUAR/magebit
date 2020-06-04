<?php
session_start();
require_once("connection.php");
if( isset($_SESSION['id'])){
header("Location: welcome.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Magebit Authorization</title>
	
	<meta charset="UTF-8">
	<meta name = "viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
	<div id="fold">
	<img src="res/fold.png" width="10" height="460">
	</div>
	<!--Dark Container LOGIN/SIGNUP-->
<div class="cont">
	<div class="logIn">
		<h2>Don't have an account?</h2>
		<hr>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		<button class="signup" id="signup" type="button">SIGN UP</button>
	</div>
	<div class="Signin">
		<h2 class="haveanacc">Have an account?</h2>
		<hr>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
		<button class="loginbtn" id="loginbtn" type="button">LOGIN</button>
	</div>
</div>
<!--White Container Form-->
<div class="form" id="form">
	<!--Login Form-->
	<div id="formAll1">
		<form action="login.php" method="post">
	<div id="LoginLogo">
	<div>
<h2>Login</h2>
</div>
<div>
<img src="res/logo.png">
</div>
</div>
<hr id="formHR">
<label>
	<div id="labelIcon">
		<div>
	<span id="labelText">Email</span>
</div>
<div>
	<img id="myImg" src="res/mailGrey.png" width="16" height="14">
</div>
	</div>
	<input id="email" type ="email" name = "email">
</label>
<label>
	<div id="labelIcon">
		<div>
	<span id="labelText2">Password</span>
</div>
<div>
	<img id="myImg2" src="res/passGrey.png" width="16" height="17">
</div>
	</div>
	<input id="password" type ="password" name = "password">
</label>
<div id="submit_forgot">
<div>
<input class="submit" id="submit" type="submit" value="LOGIN"></input>
</div>
<div>
<button class="register" id="register" type="button">SIGN UP</button>
	</div>
<div>
<p class="forgot-pass">Forgot?</p>
</div>
</div>
</form>
</div>

<!--SignUP Form-->
<div id="formAll2">
	<form action="registration.php" method="POST">
	<div id="LoginLogo">
	<div>
<h2>Sign Up</h2>
</div>
<div>
<img src="res/logo.png">
</div>
</div>
<hr id="formHR">
<label>
	<div id="labelIcon">
	<div>
	<span id="labelText3">Name</span>
	</div>
	<div>
	<img id="myImg3" src="res/nameGrey.png" width="14" height="16">
	</div>
	</div>
	<input id="nameinput" type ="name" name = "name">
</label>
<label>
	<div id="labelIcon">
		<div>
	<span id="labelText4">Email</span>
</div>
<div>
	<img id="myImg4" src="res/mailGrey.png" width="16" height="14">
</div>
	</div>
	<input id="email2" type ="email" name = "email">
</label>
<label>
	<div id="labelIcon">
		<div>
	<span id="labelText5">Password</span>
</div>
<div>
	<img id="myImg5" src="res/passGrey.png" width="16" height="17">
</div>
	</div>
	<input id="password2" type ="password" name = "password">
</label>
<div id="submit_forgot">
<input class="submit" name="register" id="signupBTN" type="submit" value="SIGN UP"></input>
<div>
<button class="register" id="signinbtn" type="button">LOGIN</button>
	</div>
</div>
</form>
</div>
</div>

<script type="text/javascript" src="script.js"></script>
<footer>
    ALL RIGHTS RESERVED "MAGEBIT 2016.
  </footer>
</body>
	</html>