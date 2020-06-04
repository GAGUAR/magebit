<?php
$conn = mysqli_connect('localhost', 'root', '', 'userregistration', '3308');  //WAMP MySQL server uses port 3308
if(!$conn){
	echo "Failed to connect database";
}