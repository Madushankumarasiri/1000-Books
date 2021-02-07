<?php

	$servername = "localhost";
	$username = "root";
	$password = "Madu";
	$dbname = "1000 books_database";

	$conn = new mysqli($servername,$username,$password,$dbname);

	if($conn->connect_error){
		die("Connection Failed ");
	}