<?php

# first lets check if the form has been submitted:
if ($_SERVER["REQUEST_METHOD"] === "POST")
{
		$username = $_POST["uname"];
		$password = $_POST["pass"];
		$reenter = $_POST["reenter"];
		
		#this condition will check if the fields are not empty
		if (empty($username) && empty($password) && empty($reenter) && empty($gender))
		{
			echo "*Form fields are empty.<br>";
		}

		#this condition will check if the user input is not less than 2 characters long
		if (strlen($username) < 2 || strlen($password) <2 || strlen($reenter) <2)
		{
			echo "*The input is not appropriate";
		}

		#if all conditions are met, the success page is launched.
		else {
			header("Location:success.php");
		}
		

}

?>


<html>
<head>
	<title>Registration form</title>
</head>
<body>
<form method ="post" action = "">
<label>Username</label>
<input type = "text" name = "uname" placeholder = "Enter username" /><br><br>

<label>Password</label>
<input type = "password" name = "pass" placeholder = "Enter password"><br><br>

<label>Re-enter password</label>
<input type = "password" name = "reenter" placeholder = "Re-enter password"><br><br>

<label>Gender:</label>
Male:<input type = "radio" name = "okay" value = "male"> 
Female:<input type = "radio" name = "okay1" value = "female"><br><br>

<input type = "submit" value = "submit">




</form>
</body>