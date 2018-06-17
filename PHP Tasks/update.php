<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>


	<form method="POST">

		Enter correct email: <input type="text" name="mail" required="required"><br/><br/>

		Update First Name :<input type="text" name="fname_update" required="required"><br/><br/>

		Update Last Name : <input type="text" name="lname_update" required="required"><br/><br/>

		Update User Name : <input type="text" name="uname_update" required="required"><br/><br/>

		<input type="submit" name="submit" value="Update">

	</form>

	<?php

		include "conn.php";

		if(isset ($_POST['submit']) )
		{
				$email = mysqli_real_escape_string($conn, $_POST['mail']);

				 $fn = mysqli_real_escape_string($conn, $_POST['fname_update']);

				 $ln = mysqli_real_escape_string($conn, $_POST['lname_update']);

				 $un = mysqli_real_escape_string($conn, $_POST['uname_update']);

				 $sql = "UPDATE form1 SET fname='$fn', lname='$ln', uname='$un'  WHERE email='$email' ";

			if (mysqli_query($conn, $sql))
			 {
    			echo "Record updated successfully";
			 }

			 else 
			 {
   				 echo "Error updating record: " . mysqli_error($conn);
			 }
	

		}

		
		mysqli_close($conn);
	?>




</body>
</html>