<?php 
session_start();
$connection = mysqli_connect("localhost", "root", "140499", "boutique");

if (isset($_POST['registerbtn'])) 
{
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$rpassword = $_POST['repeatpassword'];

	if ($password === $rpassword && $password != '' && $fname !='' && lname != '' && email !='') {
	$query = "INSERT INTO latnt_user(firstname, lastname, email, password) VALUES ('$fname', '$lname', '$email', '$password')"; 
	$query_run = mysqli_query($connection, $query);
	
	

		if ($query_run) {
			$_SESSION['success'] = "Your Account Has Been Succesfully Registered";
			

			
		}
		else
		{
			$_SESSION['status'] = "Your Account Has Not Been Registered";
			
		}	
	}
	else
	{
		
		$_SESSION['status'] =  "Your Passwords Do NOT Match";
		
		
	}
	


	
}




 ?>