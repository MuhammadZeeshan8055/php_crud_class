<?php
	include "database.php";
	$obj = new Database();

    $id=$_GET['id'];

    $colName = "students.id,students.student_name,students.age,citytb.cname,citytb.cid";
	$join = "citytb ON students.city = citytb.cid";
	$limit = 0;
    $where="students.id=$id";
    

	$obj->select('students',$colName,$join,$where,null,$limit);
    $result = $obj->getResult();

    $student = $result[0];

    // Extracting the values
    $id = $student['id'];
    $student_name = $student['student_name'];
    $age = $student['age'];
    $city_name = $student['cname'];
    $cid = $student['cid'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
	<form action="update-data.php" method="post">
		<label>Name</label>
		<input type="text" name="sname" value="<?=$student_name?>"><br><br>
		<input type="hidden" name="id" value="<?=$id?>">

		<label>Age</label>
		<input type="number" name="sage" value="<?=$age?>"><br><br>

		<label>City</label>
		<select name="scity" id="">
			<?php
				$obj->select('citytb');
				$result = $obj->getResult();
                echo "<option value='$cid'>$city_name</option>";

				foreach ($result as list("cid"=>$cid,"cname"=>$cname)) {
					
					echo "<option value='$cid'>$cname</option>";
				}
			?>
			
		</select>	
		<br><br>
		<input type="submit" value="Save">
	</form>
</body>
</html>