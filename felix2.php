

<?php
	 include 'dbconnection.php'; 


	$snum = $_POST['_snum'];
	$sfname = $_POST['_sfname'];
	$smname = $_POST['_smname'];
	$slname = $_POST['_slname'];
	$scourse = $_POST['_scourse'];
	$sadd = $_POST['_sadd'];
	$sbplace = $_POST['_sbplace'];
	$smail = $_POST['_smail'];
	$sgender = $_POST['_sgender'];
	$sbdate = $_POST['_sbdate'];
	$selfinasst = $_POST['_selfinasst'];
	

	$sql= "INSERT INTO  r_student_profiles (student_no, studfname, studmname, studlname, course_code, stud_add, stud_bplace, stud_email, stud_gender, stud_bdate) VALUES ('$snum', '$sfname', '$smname', '$slname', $scourse, '$sadd', '$sbplace', '$smail', '$sgender', '$sbdate');";
	mysqli_query($connection,$sql);

	
	foreach ($selfinasst as $value) {
		$sql2 = "INSERT INTO  t_student_assistance (student_id, finasstitle_id) VALUES ((SELECT MAX(student_id) FROM r_student_profiles), $value);";
		mysqli_query($connection, $sql2);
	}

?>
