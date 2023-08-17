<?php
    $conn = new mysqli('localhost:3307', 'root', '123456', 'vote');
	
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>	