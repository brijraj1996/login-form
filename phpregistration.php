<?php

if ($_SERVER["REQUEST_METHOD"] === "POST")
{
		$username = $_POST["uname"];
		$password = $_POST["pass"];
		$reenter = $_POST["reenter"];
		
		if (empty($username) && empty($password) && empty($reenter) && empty($gender))
		{
			echo "*Form fields are empty.<br>";
		}

		if (strlen($username) < 2 || strlen($password) <2 || strlen($reenter) <2)
		{
			echo "*The input is not appropriate";
		}


		else {
			header("Location:success.php");
		}
		//ddjfnkjf

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