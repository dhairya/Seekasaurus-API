<?php

include("dbconnect.php");

$sql="SELECT rID, email, title1, desc1, mlat, mlong, status1, creation, closure FROM request";

$result=mysql_query($sql);
$num_results = mysql_num_rows($result);
 
if($num_results > 0) {
	while($data = mysql_fetch_object($result)){

		$rID = $data->rID;

		$email = $data->email;

		$title1 = $data->title1;

		$desc1 = $data->desc1;

		$mlat = $data->mlat;

		$mlong = $data->mlong;

		$status1 = $data->status1;

		$creation = $data->creation;

		$closure = $data->closure;

		$response[] = array('rID' => $rID, 'email' => $email,'title' => $title1, 'desc' => $desc1, 'mlat' => $mlat, 'mlong' => $mlong, 'status' => $status1, 'creation' => $creation, 'closure' => $closure);
	}
}
echo json_encode($response);
?>
