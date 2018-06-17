<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
	<link rel="stylesheet" type="text/css" href="card.css">
</head>
<body>
<?php
include "connect.php";

$sql = "SELECT * FROM details where id='7'";

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) 
	{
		while($row = mysqli_fetch_assoc($result))

		{

		echo '<h2 style="text-align:center">User Profile Card</h2>';

		echo '<div class="card">';

		echo "<img src='uploads/". $row['File'] . "'". " alt='Image' width='100%' />";

		echo "<h1>".$row['Name']."</h1>";

		echo '<p class="title">'.$row['Email']."</p>";

		echo '<p>'.$row['City'].'</p>';
echo<<<EOL
<div style="margin: 24px 0;">

</div>
<p><button>Contact</button></p>
</div>
EOL;
}
}
?>

</body>
</html>