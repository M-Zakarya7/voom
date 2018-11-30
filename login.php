<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "Voom";

	 $db = new mysqli($server, $username, $password, $database);
	 if($db->connect_error){
		die($db->connect_error);
	 }
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $sname = mysqli_real_escape_string($db,$_POST['uname']);
      $passwordd = mysqli_real_escape_string($db,$_POST['psw']); 
      
      $sql = "SELECT id FROM voomuser WHERE sname = '$sname' and passwordd = '$passwordd'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         header("location:index.php");
      }else {
		  print "Your Login Name or Password is invalid";
      }
   }
?>