<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php 

		$fname=$lname=$date=$email=$username=$password=$confirmpassword=$rel="";
		$fnameEr=$lnameEr=$emailEr=$dateEr=$usernameEr=$passwordEr=$confirmpasswordEr=$relEr='';
		$flag=false;
		
		
		if(htmlspecialchars($_SERVER['REQUEST_METHOD']=="POST"))
		{
			$fname =$_POST["fname"];
			$lname =$_POST["lname"];
			$email =$_POST["email"];
			$date =$_POST["date"];
			$username=$_POST["username"];
			$password=$_POST["password"];
			$confirmpassword=$_POST["confirmpassword"];
			


			if(empty($fname))
			{
				$fnameEr="First name is required  ";
				$flag=true;
				
			}
			
			else
			{
				$fname=senitize($fname);
				$flag=false;
			}

			if(empty($lname))
			{
				$lnameEr="Last name is required  ";
				$flag=true;
				
			}
			
			else
			{
				$lname=senitize($lname);
				$flag=false;
			}


			if(empty($email))
			{
				$emailEr="Email is required  ";
				$flag=true;
				
			}
			
			else
			{
				$email=senitize($email);
				$flag=false;
			}

			if(empty($date))
			{
				$dateEr="Date ofbirth is required  ";
				$flag=true;
				
			}
			
			else
			{
				$date=senitize($date);
				$flag=false;
			}

			if(empty($username))
			{
				$usernameEr="User name is required  ";
				$flag=true;
				
			}
			else
			{
				$username=senitize($username);
				$flag=false;
			}
			if(empty($password))
			{
				$passwordEr= "Password is  required  ";
				$flag=true;
				
			}
			else
			{
				$password=senitize($password);
				$flag=false;
			}
			if(empty($confirmpassword))
			{
				$confirmpasswordEr= "Confirm password is  required  ";
				$flag=true;
				
			}
			else if($confirmpassword!==$password)
			{
				$confirmpasswordEr= "Confirm password is  not matched  ";
				$flag=true;

			}
			else
			{
				$confirmpassword=senitize($confirmpassword);
				$flag=false;
			}

			
			
				if(!$flag)
				{
					$filename="info.json";
					$mode="a";
					$handle=fopen($filename, $mode);

					$arr1=array(
								
								'username'=>$username,
								'password'=>$password,
								'confirmpassword'=>$confirmpassword
								
							);

					$encode=json_encode($arr1);
					$current_data = file_get_contents($filename);  
					$array_data = json_decode($current_data, true);  //array

					$arr2=array(
								
								'username'=>$username,
								'password'=>$password,
								'confirmpassword'=>$confirmpassword
								
							);

					$array_data[]=$arr2;

					$final_encode=json_encode($array_data);

					fwrite($handle, $final_encode);

					$read_data=file_put_contents('info.json', $final_encode);

					if($read_data)
					{
						$successMesg="save successfully";

					}
					else
					{
						$errorMesg="error while saving";
					}

					
				}



			}
			

			

			
	
		
		function senitize($data)
		{
			$data=trim($data);
			$data=stripcslashes($data);
			$data=htmlspecialchars($data);
			return $data;

		}
		
?>



</body>
</html>