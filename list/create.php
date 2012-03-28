<?php

include("dbconnect.php");

$rID = $_GET['rID'];

$email = $_GET['email'];

$status = $_GET['status'];

$ulat = $_GET['ulat'];

$ulong = $_GET['ulong'];

$time1 = $_GET['time'];

$sql = "INSERT INTO list (rID, email, status, ulat, ulong, time1) VALUES ('$rID', '$email', '$status', '$ulat', '$ulong', '$time1')";

if(mysql_query($sql)) {
$response[] = 1;
}

else {
echo mysql_error ();
$response[] = 0;	

}

echo json_encode($response);

?>
