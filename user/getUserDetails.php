<?php

include("dbconnect.php");

$email = $_GET['email'];

$sql="SELECT name FROM user WHERE email= '$email'";

$result=mysql_query($sql);

if(mysql_query($sql)) {

$response[] = 1;	

while($data = mysql_fetch_object($result)){
 $response[] = array('name' => $data->name);
}
}

else {

$response[] = 0;	

}

echo json_encode($response);
	
?>
