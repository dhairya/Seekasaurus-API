<?php

include("dbconnect.php");

$email = $_POST['email'];

$pass = $_POST['pass'];

$name = $_POST['name'];

$sql = "INSERT INTO user (email, password, name) VALUES ('$email', '$pass', '$name')";

if(mysql_query($sql)) {
 $response[] = 1;	
}

else {
echo mysql_error ();
$response[] = 0;	

}

echo json_encode($response);

?>
