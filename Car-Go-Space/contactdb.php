<?php	
session_start();
include "connection.php";

$name = $_POST['first_name'];
$surname = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$country = $_POST['country'];
$topic = $_POST['topic'];
$subject = mysqli_real_escape_string($conn, $_POST['subject']);



$sql = "INSERT INTO contact_us (first_name, last_name, email_address, phone_num, country, category, comment)
VALUES ('$name','$surname','$email','$phone','$country','$topic', '$subject')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: contact-us.php");
	exit();
