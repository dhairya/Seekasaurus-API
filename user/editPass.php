<?php

include("dbconnect.php");

$oldpass = $_POST['oldpass'];

$newpass = $_POST['pass'];

$email = $_POST['email'];

$sql = "UPDATE user SET password = '$newpass' WHERE email='$email' AND password='$oldpass'";

if(mysql_query($sql)) {
 $response[] = 1;	
}

else {
echo mysql_error ();
$response[] = 0;	

}

echo json_encode($response);

?>
