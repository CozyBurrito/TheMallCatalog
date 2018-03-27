<?php

// Connect to database
$config = parse_ini_file('../../db/db.ini');
$conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);

if ($conn->connect_error) {
	die("Connection failed" . $conn->connect_error);
}

// Insert credentials into database
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$name = $_POST["name"];

$sql = "INSERT INTO Accounts (Password, Email, Username, name, Account_Type) VALUES ('$password', '$email', '$username', '$name', 'customer');";

$result = $conn->query($sql); 

if($result) {
	header("location: ../index.php");
}
else {
	die('Account Creation Failed: ' . mysql_error());
}

$conn->close(); 

?>