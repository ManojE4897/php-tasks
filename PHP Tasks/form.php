<!doctype html>
<html>
<head>
<title>The Form</title>
<style>
#register{
padding:10% 40%;

}
	
fieldset{
	
	width:250px;
	text-align:center;
		background-color:rgb(255,548,77);	
	}
	
 input[type='submit']:hover{
 box-shadow: 3px 3px 1px #4575cb;
 color:white;
 font-size:16pt;
 width:100px;
 height:50px;
 background-color:#6A5ACD;
}
</style>
</head>
<body>
	
<form id="register"  action="insert.php"  method="POST"  accept-charset="UTF-8">

	<fieldset >
		<legend style="font-size: 30px">Sign-Up</legend><br/>

			<label for='name' >First Name: </label><br/>
			<input type='text' name="fname"  maxlength="50" autofocus="on" required="required" />
			<br/><br/>

			<label for='name' >Last Name: </label><br/>
			<input type='text' name="lname"  maxlength="50"  required="required" />
			<br/><br/>

			<label for='email' >Email Address:</label><br/>
			<input type='email' name="email"  maxlength="50"  required="required"/><br/><br/>

			<label for='username' >UserName:</label><br/>
			<input type='text' name="username"  maxlength="50" required="required" /><br/><br/>

			<label for='password' >Password:</label><br/>
			<input type='password' name="password" maxlength="50" required="required" /><br/><br/>

			<input type='submit' name='submit' value='Submit' />

	</fieldset>

</form>


</body>
</html>

<!-- http://localhost/Register.php -->
<!--this will redirect to the Hello.php file-->