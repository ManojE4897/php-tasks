<!DOCTYPE html>
<html>
<head>
	<title>Retrive</title>
</head>
<body>

	<?php

	include ("conn.php");

	$sql = "SELECT * FROM details";

	$result = mysqli_query($conn, $sql);

	if ($rows = mysqli_num_rows($result)) 
	{
   				
		echo "Number of rows in details table are: ".$rows;
   		 	 
	}

		else 
		{
	    		echo "0 results";
		}

		mysqli_close($conn);
	?>



</body>
</html>