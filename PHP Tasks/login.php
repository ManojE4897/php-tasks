<!DOCTYPE html>
<html>
<head>
	<title>LOG-IN</title>
	<style type="text/css">
	.main{
		background-color: ivory;
		border:1px solid;
		margin-top:150px;
		margin-left:500px;
		height: 300px;
		width:30%;

	}
	input:hover
	{
		width:40%;
		height:25px;
	}
	input[type=submit]:hover
	{
		width:20%;
		height:25px;
	}
	</style>
</head>
<body>

 <center class="main" >
 	<p id="message"></p>
	<form  method="post" action=""enctype="multipart/form-data">
		<br><br><br>
		<label>Email</label>
		<input type="email" name="email" autofocus="on" required="required"><br><br>
		<label> password</label>
		<input type="password" name="password" required="required"><br><br>
		<input type="submit" name="submit" value="submit">
	</form>
	
		<br/><br/><br/>
		<a href="http://localhost/PHP/form.php" style="float:right">SIGN_UP</a>

  </center>
 


		  <?php
					session_start();

					if(isset($_POST['submit']))
					{
					 	include"conn.php";

						 $email=mysqli_real_escape_string($conn,$_POST['email']);

						 $password=mysqli_real_escape_string($conn,$_POST['password']);

						 $qy="SELECT * FROM form1 WHERE email='$email' and password='$password'";

						 $res=mysqli_query($conn,$qy);

							if(mysqli_num_rows($res) > 0)

							{

								while($row = mysqli_fetch_assoc($res))
								{
									$fname = $row['fname'];
									$lname  = $row['lname'];
								}
								$name = $fname." ".$lname;

								$_SESSION['name']=$name;



								header ("Location:displayname.php");
							}

							 echo '<script> document.getElementById("message").innerHTML="Invalid username or password";
							      </script>'; 
					}
		   ?>

</body>
</html>