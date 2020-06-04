<?php

require_once("connection.php");
$email = $password = $pwd = "";

$email = $_POST['email'];
$pwd = $_POST['password'];
$password=MD5($pwd);
$sql = "SELECT * FROM usertable WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row["id"];
		$name=$row["name"];
		$email = $row["email"];
		session_start();
		$_SESSION["id"]=$id;
		$_SESSION["email"]=$email;
		$_SESSION["name"]=$name;
	}
	header("Location: welcome.php");
}else{
	echo "Invalid Email or Password";
}

?>


