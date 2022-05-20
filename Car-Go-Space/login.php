<?php	
session_start();            #creates a session for variables to be used.
include "connection.php";   #Connects to local host


$email = $_POST['email'];     #username and password post values passed from sign-in.php
$pass = $_POST['password'];


$sql = "SELECT * FROM customer_details WHERE customer_email='$email' AND customer_pass='$pass'";            #pulls database username and password entries

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) === 1){
	$row = mysqli_fetch_assoc($result);
	if($row['customer_email'] === $email && $row['customer_pass'] === $pass){ #checks valid credentials
		echo "Logged In!";
		if($email === 'cgsadmin@cgs.com'){ #checks for admin account login
			header("location: admin.php");
			exit();
			}
		$_SESSION['customer_name'] = $row['customer_name'];  #if standard user logs in, creates session variables used in 
		$_SESSION['customer_pass'] = $row['customer_pass'];  #creation of maintenance database entry
		$_SESSION['phone_num'] = $row['phone_num'];
		$_SESSION['car_model'] = $row['car_model'];
		$_SESSION['id'] = $row['id'];
		header("Location: maint.php");
		exit();
	}
	else{
		header("Location: sign-in.php?error=Incorrect username or password"); #error passed to sign-in.php on failure
		exit();
	}
}
else{
	header("Location: sign-in.php?error=Incorrect username or password");
	exit();
}

