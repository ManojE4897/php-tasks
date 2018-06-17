<!DOCTYPE html>
<html>
<head>
	<title>Retrive</title>
</head>
<body>

	<?php

	include ("conn.php");

	$sql = "SELECT * FROM form1";

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) 
	{
   				
		echo "<table border='1' width='70%'><tr><th>Full Name</th><th>Last Name</th><th>User Name</th><th>Email</th>";

   		 while($row = mysqli_fetch_assoc($result))
   		 	 
   		 	 {

   		 	 	echo "<tr>";

   		 	 	echo "<td>". $row["fname"]. "</td>";

   		 	 	echo "<td>". $row["lname"]."</td>";

   		 	 	echo "<td>". $row["uname"]."</td>";

   		 	 	echo "<td>". $row["email"]. "</td>";

   		 	 	echo "</tr>";

   		 	 }
   		 	 
	}

		else 
		{
	    		echo "0 results";
		}

		mysqli_close($conn);
	?>



</body>
</html>