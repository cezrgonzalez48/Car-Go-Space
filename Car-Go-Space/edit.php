<?php
session_start();
include "connection.php";   #connects to localhost

$id = $_POST['Id'];         #id variable used by admin page delete function

$custid = $_POST['customerID'];      #customer details used to add new entry to customer DB
$custname = $_POST['customerName'];
$custemail = $_POST['customerEmail'];
$custphone = $_POST['customerPhone'];
$custcar = $_POST['customerCar'];


$maintname = $_SESSION['customer_name'];   #maintenance details used for scheduling maintenance
$maintphone = $_SESSION['phone_num'];
$maintcar = $_SESSION['car_model'];
$maintdate = $_POST['maint'];
$maint = $_POST['TypeMaint'];

$userid = $_SESSION['id'];              #username and pass for changing default password for new user
$newpass = $_POST['newpass'];

if(isset($_POST['Id'])){
$sql = mysqli_query($conn,"DELETE FROM contact_us WHERE id='$id'");  #checks id used for admin del function
	}


elseif(isset($_POST['customerID'])){          #checks Customer id used for admin add new user function
$sql = "INSERT INTO customer_details (customer_id, customer_name, customer_email, phone_num, car_model) 
VALUES('$custid', '$custname', '$custemail','$custphone', '$custcar')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
elseif(isset($_POST['newpass'])){            #updates default password with newly typed user password
	$sql = "UPDATE customer_details SET customer_pass = '$newpass' WHERE id = '$userid'";
	if ($conn->query($sql) === TRUE) {
  	echo "New record created successfully";
} 	else {
  	echo "Error: " . $sql . "<br>" . $conn->error;
}
	header("Location: sign-in.php");
	exit();
}

elseif(isset($_POST['TypeMaint'])){         #adds new maintenance entry into database
	$sql = "INSERT INTO maintenance (customer_name, phone_num, car_model, date_sched, work_desc) 
	VALUES('$maintname','$maintphone', '$maintcar','$maintdate', '$maint')";
	if ($conn->query($sql) === TRUE) {
  	echo "New record created successfully";
} 	else {
  	echo "Error: " . $sql . "<br>" . $conn->error;
}
	header("Location: maint.php");
	exit();
}





header("Location: admin.php");
	exit();