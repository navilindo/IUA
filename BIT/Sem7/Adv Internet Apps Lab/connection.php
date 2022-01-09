<?php
	$host = 'localhost';
	$user = 'root';
	$pass = 'toor';
	$db = 'lab7';
	
	$conn = new mysqli($host,$user,$pass,$db);
	
	if($conn){
		'Connection successful <br>';
		}
	else
		die($conn->error);
			
	// we dont close connection as we need it in other places
?>
