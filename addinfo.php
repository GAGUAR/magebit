<?php
session_start();
require_once('connection.php');
$datatype=$datavalue=$success='';
$id=$_SESSION['id'];
$datatype = $_POST['datatype'];
$datavalue=$_POST['datavalue'];
if($datatype!='' and $datavalue!=''){
$sql = "INSERT INTO userinfo (userid, datatype, datavalue) VALUES ('$id', '$datatype', '$datavalue')";
$result = mysqli_query($conn, $sql);
if($result){
	
	header("Location: welcome.php");
}
}else{
	echo "Enter values";
}
?>