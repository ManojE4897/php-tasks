<!DOCTYPE html>
<html>
<head>
	<title>Insert</title>
</head>
<body>

	<?php

			include("conn.php");

			if(isset ($_POST['submit']) )
			{
				 $fname = mysqli_real_escape_string($conn, $_POST['fname']);

				 $lname = mysqli_real_escape_string($conn, $_POST['lname']);

				 $uname = mysqli_real_escape_string($conn, $_POST['username']);

				 $email = mysqli_real_escape_string($conn, $_POST['email']);

				 $pwd   = mysqli_real_escape_string($conn, $_POST['password']);


				 	$sql= "INSERT INTO form1 (fname, lname, uname, email, password) VALUES ('$fname', '$lname', '$uname', '$email', '$pwd')";




				 	   $insert = mysqli_query ($conn, $sql) ;

		              if($insert) 
		              {
		                 echo "success<br/>";
		                 echo "<a href='http://localhost/PHP/retrive.php'>Retrive Data</a>";
		              }
		                   
		             else
		              {
		                 echo("Error description: " . mysqli_error($conn));
		              }


			}



					mysqli_close($conn);

	?>



</body>
</html>