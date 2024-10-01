<?php

	include "database.php";
	$obj = new Database();

	$data = [
		"student_name" => $_POST['sname'],
		"age" => $_POST['sage'],
		"city" => $_POST['scity']
	];

	$message = $obj->insert("students", $data) 
		? "Data Inserted Successfully." 
		: "Data is Not Inserted Successfully.";

	echo "<h2>$message</h2>";

?>