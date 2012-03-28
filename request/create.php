<?php

include("dbconnect.php");

$email = $_GET['email'];

$title1 = $_GET['title'];

$desc1 = $_GET['desc'];

$mlat = $_GET['mlat'];

$mlong = $_GET['mlong'];

$status = $_GET['status'];

$creation = $_GET['creation'];

$closure = $_GET['closure'];

$sql = "INSERT INTO request (email, title1, desc1, mlat, mlong, status, creation, closure) VALUES ('$email', '$title1', '$desc1', '$mlat', '$mlong', '$status', '$creation', '$closure')";

if(mysql_query($sql)) {
$sql1 = "SELECT MAX(rID) AS curr_rID FROM request";
$result1=mysql_query($sql1);
	if(mysql_query($sql1)) {
		while($data = mysql_fetch_object($result1)){
 $response[] = array('rID' => $data->curr_rID);
}

else {
echo mysql_error ();
$response[] = 0;	

}

echo json_encode($response);

?>
