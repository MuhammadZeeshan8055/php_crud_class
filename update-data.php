<?php

	include "database.php";
	$obj = new Database();

	$id = $_POST['id'];
	$data = [
		"student_name" => $_POST['sname'],
		"age" => $_POST['sage'],
		"city" => $_POST['scity']
	];

	$message = $obj->update('students', $data, 'id=' . $id) 
		? "Data Updated Successfully." 
		: "Data is Not Updated Successfully.";

	echo "<h2>$message</h2>";

?>
