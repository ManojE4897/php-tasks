<!DOCTYPE html>
<html>
<head>
	<title>Connection</title>
</head>
<body>

	<?php

	 	$dbHost     = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'internform';
        
        //Create connection and select DB
        $conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
        
        // Check connection
        if(mysqli_connect_errno())
        {
            die("Connection failed: " . mysqli_connect_error());
        }


	?>


</body>
</html>