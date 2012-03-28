<?php

include("dbconnect.php");

$rID = $_GET['rID'];

$mID = $_GET['mID'];

$sql = "DELETE FROM chat WHERE rID='$rID' AND mID='$mID'";

if(mysql_query($sql)) {
$response[] = 1;	
}

else {
$response[] = 0;	
}

echo json_encode($response);
?>
