<?php

include("dbconnect.php");

$rID = $_GET['rID'];

$email = $_GET['email'];

$text = $_GET['text'];

$mID = $_GET['mID'];

$sql = "UPDATE chat SET email = '$email', text = '$text' WHERE rID='$rID' AND mID='$mID'";

if(mysql_query($sql)) {
$response[] = 1;	
}

else {
$response[] = 0;	
}

echo json_encode($response);

?>
