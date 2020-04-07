<?php 
session_start();
$connection = mysqli_connect("localhost", "root", "140499", "boutique");

function registerAcnt(){

	if (isset($_POST['registerbtn'])) 
	{
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$password = sha1($_POST['password']);
		$rpassword = sha1($_POST['repeatpassword']);

		if ($password === $rpassword && $password != '' && $fname !='' && lname != '' && email !='') {
		$query = "INSERT INTO latnt_user(firstname, lastname, email, password) VALUES ('$fname', '$lname', '$email', '$password')"; 
		$query_run = mysqli_query($connection, $query);
		
		

			if ($query_run) {
				$_SESSION['success'] = "Your Account Has Been Succesfully Registered";
				header('Location: register.php');

				
			}
			else
			{
				$_SESSION['status'] = "Your Account Has Not Been Registered";
				header('Location: register.php');
			}	
		}
		else
		{
			
			$_SESSION['status'] =  "Your Passwords Do NOT Match";
			header('Location: register.php');
		
	}
	


	
}
}



 ?>