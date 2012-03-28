<?php

include("dbconnect.php");

$pass = $_POST['pass'];

$email = $_POST['email'];

$sql="SELECT * FROM user WHERE email='$email' AND password='$pass'";

$result=mysql_query($sql);

$num_rows = mysql_num_rows($result);

$response[] = $num_rows;

echo json_encode($response);
	
?>
