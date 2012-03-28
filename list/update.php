<?php

include("dbconnect.php");

$rID = $_GET['rID'];

$email = $_GET['email'];

$status = $_GET['status'];

$ulat = $_GET['ulat'];

$ulong = $_GET['ulong'];

$time1 = $_GET['time'];

$sql = "UPDATE list SET email = '$email', status = '$status', ulat = '$ulat', ulong = '$ulong', time1 = '$time1' WHERE rID='$rID'";

if(mysql_query($sql)) {
$response[] = 1;	
}

else {
$response[] = 0;	
}

echo json_encode($response);

?>
