<?php
$SERVER = '';
$USER = '';
$PASS = '';
$DATABASE = '';

if (!($connection = mysql_connect( $SERVER, $USER, $PASS))) {

	echo "Couldn't connect to the database.";
	exit;
}

mysql_select_db( $DATABASE );

?>
