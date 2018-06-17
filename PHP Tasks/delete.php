<!DOCTYPE html>
<html>
<head>
	<title>Delete Data</title>
</head>
<body>

	<form method="POST">
		Enter ID to delete : <input type="text" name="id"><br/>
		<input type="submit" name="submit" value="delete">
	</form>


	<?php

			include "conn.php";

			if(isset ($_POST['submit']) )
			{
					$id = mysqli_real_escape_string($conn, $_POST['id']);

					$sql = "DELETE FROM form1 WHERE id='$id' ";

				if (mysqli_query($conn, $sql))
				 {
	    			echo "Record updated successfully";
				 }

				 else 
				 {
	    			echo "Error deleting record: " . mysqli_error($conn);
	    		 }

			}


	?>


</body>
</html>