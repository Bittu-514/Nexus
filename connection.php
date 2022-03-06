<?php  
     	$servername = "localhost";
	$username = "admin";  
       	$password = "Bbbittu3";  
       	$conn = mysql_connect ($servername , $username , $password) or die("unable to connect to host");  
	$sql = mysql_select_db ('travel',$conn) or die("unable to connect to database");	
?>
