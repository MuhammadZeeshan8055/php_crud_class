<?php

	include "database.php";
	$obj = new Database();

	$id = $_GET['id'];

	$value = ["id"=>$id];

	if($obj->delete("students","id=".$id)){
		echo "<h2>Data Deleted Successfully.</h2>";
	}else{
		echo "<h2>Data is Not Deleted.</h2>";
	}

?>