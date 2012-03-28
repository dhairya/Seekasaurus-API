<?php

include("dbconnect.php");

$rID = $_GET['rID'];

$email = $_GET['email'];

$title1 = $_GET['title'];

$desc1 = $_GET['desc'];

$mlat = $_GET['mlat'];

$mlong = $_GET['mlong'];

$status = $_GET['status'];

$creation = $_GET['creation'];

$closure = $_GET['closure'];

$sql = "UPDATE request SET email = '$email', title1 = '$title1', desc1 = '$desc1', mlat = '$mlat', mlong = '$mlong', status1 = '$status1', creation = '$creation', closure = '$closure' WHERE rID='$rID'";

if(mysql_query($sql)) {
$response[] = 1;	
}

else {
$response[] = 0;	
}

echo json_encode($response);

?>
