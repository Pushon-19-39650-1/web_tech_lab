<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration</title>
</head>
<body>
	
	<br><br>
	<?php include "registrationAction.php";?>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
		<fieldset align="center">

			<legend>Sign Up information</legend>

			First Name *: <input type="text" name="fname" value="<?php echo $fname;?>">
			<label><?php echo $fnameEr;?></label>
			<br><br>

            Last Name *: <input type="text" name="lname" value="<?php echo $lname;?>">
            <label><?php echo $lnameEr;?></label>
            <br><br>

            Date Birth *: <input type="date" name="date" value="<?php echo $date;?>">
            <label><?php echo $dateEr;?></label>
            <br><br>

            


           

            Phone *: <input type="number" name="phone" value="<?php echo $phone;?>">
            
            <br><br>

            Email *: <input type="email" name="email" value="<?php echo $email;?>">
            <label><?php echo $emailEr;?></label>
            <br><br>

            Personal Website *: <input type="website" name="website" >
            
            <br><br>



			User Name *: <input type="text" name="username" value="<?php echo $username;?>">
			<label><?php echo $usernameEr;?></label>
			
			<br><br>
			Password *: <input type="password" name="password" value="<?php echo $password;?>">
			<span><?php echo $passwordEr;?></span>
			
			<br><br>
			Confirm Password *: <input type="password" name="confirmpassword" value="<?php echo $confirmpassword;?>">
			<span><?php echo $confirmpasswordEr;?></span>
			<br><br>
			
			<input type="submit" name="submit" value="sign up">
			<br><br>

			<span>Already have an account ? <a href="signin.php">Sign in</a></span>

		</fieldset>

	</form>

	

</body>
</html>