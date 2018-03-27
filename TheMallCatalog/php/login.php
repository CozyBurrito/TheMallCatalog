<?php

session_start();


// Connect to database
$config = parse_ini_file('../../db/db.ini');
$conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);

if ($conn->connect_error) {
	die("Connection failed" . $conn->connect_error);
}

// Check username and password
$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT Username, Password, Account_Type, AccountID FROM `Accounts` WHERE Username = '$username' AND Password = '$password'";

$result = $conn->query($sql); 

$row = $result->fetch_assoc();

if($result->num_rows == 1) {
	
	$_SESSION["AccountID"] = $row["AccountID"];
	
	if($row["Account_Type"] == "customer") {
		header("location: ../customer.php");
	}
	else if($row["Account_Type"] == "admin") {
		header("location: ../admin.php");
	}
	else if($row["Account_Type"] == "staff") {
		header("location: ../staff.php");
	}
	else {
		header("location: ../index.php");
	}
	
}
else {
	header("location: ../index.php");
}

$conn->close(); 

?>