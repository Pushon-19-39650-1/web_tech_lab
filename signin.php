<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	

	<?php include "signinAction.php" ;?>
	<br><br>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
		
		
		<fieldset align="center">

			<legend> Sign In </legend>

			User Name *: <input type="text" id="username" name="username" value="<?php echo $username;?>">
			<span><?php echo $usernameEr;?></span>
			
			<br><br>
			Password *: <input type="password" id="password" name="password" value="<?php echo $password;?>">
			<span><?php echo $passwordEr;?></span>
			
			<br><br>

			<input type="submit" name="submit" value="log in">
			<br><br>

			<a href="registration.php">Click to Registration</a>
			

		</fieldset>

	</form>

</body>
</html>