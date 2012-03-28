<?php

include("dbconnect.php");

$rID = $_GET['rID'];

$sql = "DELETE FROM request WHERE rID='$rID'";

if(mysql_query($sql)) {
$response[] = 1;	
}

else {
$response[] = 0;	
}

echo json_encode($response);
?>
