<?php

include("dbconnect.php");

$rID = $_GET['rID'];

$email = $_GET['email'];

$text = $_GET['text'];

$sql = "INSERT INTO chat (email, rID, text) VALUES ('$email', '$rID', '$text')";

if(mysql_query($sql)) {
$response[] = 1;
}

else {
echo mysql_error ();
$response[] = 0;	

}

echo json_encode($response);

?>
