<?php

include("dbconnect.php");

$sql="SELECT rID, email, status, ulat, ulong, time1 FROM list";

$result=mysql_query($sql);
$num_results = mysql_num_rows($result);
 
if($num_results > 0) {
	while($data = mysql_fetch_object($result)){

		$rID = $data->rID;

		$email = $data->email;

		$status = $data->status;

		$ulat = $data->ulat;

		$ulong = $data->ulong;

		$time1 = $data->time1;

		$response[] = array('rID' => $rID, 'email' => $email,'status' => $status, 'ulat' => $ulat, 'ulong' => $ulong, 'time' => $time1);
	}
}
echo json_encode($response);
?>
