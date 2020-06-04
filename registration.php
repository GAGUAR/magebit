<?php
require_once('connection.php');
$name=$email=$password='';
$name = $_POST['name'];
$email=$_POST['email'];
$password =$_POST['password'];
$pwd = MD5($password);

$sql = "INSERT INTO usertable (name, email, password) VALUES ('$name', '$email', '$pwd')";
$result = mysqli_query($conn, $sql);
if($result){
	echo "Success! Please Login.";
}else{
	echo "Error ".$sql;
}
?>