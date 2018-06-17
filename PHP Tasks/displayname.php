<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Session</title>
	<style type="text/css">
		.right
		{
			float:right;
		}
	</style>
</head>
<body>


			<?php
					  $user=$_SESSION['name'];
					  echo'<div class="right">';
					  echo '<h1>'.$user.'</h1>';
					  echo'</div>';

					  echo '<a href="http://localhost/PHP/logout.php">LOG-OUT</a>';
			 ?>
  </body>
</html>
