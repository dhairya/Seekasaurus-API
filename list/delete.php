<?php

include("dbconnect.php");

$email = $_GET['email'];

$rID = $_GET['rID'];

$sql = "DELETE FROM list WHERE rID='$rID' AND email='$email'";

if(mysql_query($sql)) {
$response[] = 1;	
}

else {
$response[] = 0;	
}

echo json_encode($response);
?>
