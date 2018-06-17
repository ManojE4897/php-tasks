<?php

 
include("connect.php");
if(isset($_POST['submit'])) {

	$name = $_POST['name'];

	$phone = $_POST['phone'];

	$email = mysqli_real_escape_string($conn,$_POST['email']);

	$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);

	$gender = mysqli_real_escape_string($conn,$_POST['gender']);

	$course = mysqli_real_escape_string($conn,$_POST['course']);

	$sdate = mysqli_real_escape_string($conn,$_POST['sdate']);

	$edate = mysqli_real_escape_string($conn,$_POST['edate']);

	$duration = mysqli_real_escape_string($conn,$_POST['duration']);

	$shtime = mysqli_real_escape_string($conn,$_POST['shtime']);

	$city = mysqli_real_escape_string($conn,$_POST['city']);

	$comment = mysqli_real_escape_string($conn,$_POST['comment']);

	$file = rand(1000,100000)."-".$_FILES['file']['name'];
 	$file_loc = $_FILES['file']['tmp_name'];
 	$file_size = $_FILES['file']['size'];
 	$file_type = $_FILES['file']['type'];
 	$folder="uploads/";
 
 	move_uploaded_file($file_loc,$folder.$file); 

 	$sql= " INSERT INTO details (Name, Phone, Email, Password, Gender, Course, Date_start, Date_end, Class_duration, Shift, City, File, File_type, File_size,	Comments)VALUES ('$name', '$phone', '$email', '$pwd', '$gender', '$course', '$sdate', '$edate', '$duration', '$shtime', '$city', '$file', '$file_type' , '$file_size', '$comment')";

 	$res = mysqli_query($conn, $sql);

 		if($res) {
 					 
					header("Location: branchsetup.php");
				 }
}
mysqli_close($conn);

?>