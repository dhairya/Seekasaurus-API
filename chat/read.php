<?php

include("dbconnect.php");

$sql="SELECT rID, mID, email, text, time FROM chat ORDER BY rID, mID";

$result=mysql_query($sql);
$num_results = mysql_num_rows($result);
 
if($num_results > 0) {
	while($data = mysql_fetch_object($result)){

		$rID = $data->rID;

		$email = $data->email;

		$mID = $data->mID;

		$text = $data->text;

		$time = $data->time;

		$response[] = array('mID' => $mID, 'rID' => $rID,'email' => $email, 'text' => $text, 'time' => $time);
	}
}
echo json_encode($response);
?>
