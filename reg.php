<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "Voom";

 $conn = new mysqli($server, $username, $password, $database);
 if($conn->connect_error){
 	die($conn->connect_error);
 }
	$sname=mysqli_real_escape_string($conn,$_POST['email']);
	$passwordd=mysqli_real_escape_string($conn,$_POST['psw']);
	mysqli_query($conn,"insert into voomuser values('$sname','$passwordd')");
	print "ok";

?>