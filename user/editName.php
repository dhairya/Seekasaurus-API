<?php

include("dbconnect.php");

$name = $_POST['name'];

$email = $_POST['email'];

$sql = "UPDATE user SET name = '$name' WHERE email='$email'";

if(mysql_query($sql)) {
 $response[] = 1;	
}

else {
echo mysql_error ();
$response[] = 0;	

}

echo json_encode($response);

?>
