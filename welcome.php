<?php
session_start();
require_once("connection.php");
if( isset($_SESSION['id'])){            //Checks if user is logged in
$id=$_SESSION['id'];
$sql = "SELECT * FROM usertable WHERE id='$id'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
		$name = $row['name'];
	}
}
}else{
header("Location: error.php");  //If not shows ERROR
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome - Magebit</title>
	<meta charset="UTF-8">
	<meta name = "viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="welcomeCont">
	<h2>Welcome, <?php if( isset($_SESSION['id'])){ 
		echo $name;   											//Shows user name 
	}else{
		header("Location: error.php");
	}
	
	?>!</h2>
	<p>Want to add anything else?</p>
	<form action="addinfo.php" method="POST">
	<div class="wlcmForm">
		
		<label>
		<div>
		<span id="labelText">Data Type</span>
		</div>
		<input id="dataType" type ="datatype" name = "datatype">
		</label>

		<label>
		<div>
		<span id="labelText">Value</span>
		</div>
		<input id="dataValue" type ="datavalue" name = "datavalue">
		</label>
		
	</div>
	<div class="sbBtn">
		<div>
	<input class="submit" id="submit" type="submit" value="SUBMIT"></input>
</div>
</div>
</form>
<form action="logout.php" method="POST">
<div class="logout">
		<div>
	<input type="submit" name="submit" value="LOGOUT">
</div>
	</div>
</form>
	</div>
</div>

<footer>
    ALL RIGHTS RESERVED "MAGEBIT 2016.
  </footer>
</body>
	</html>