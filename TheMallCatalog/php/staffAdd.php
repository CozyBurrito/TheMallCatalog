<?php
        
    // Connect to database
    $config = parse_ini_file('../../db/db.ini');
    $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);

    if ($conn->connect_error) {
        die("Connection failed" . $conn->connect_error);
    }   
     
    // get variables
    $StoreName = $_POST["StoreName"];
    $ItemName  = $_POST["ItemName"];
    $Cost      = $_POST["Cost"]; 
    $Num       = $_POST["Num"];
    $StaffID   = "How to get this?"; 

    $sql = "INSERT INTO `Store_Item` VALUES ('NULL', '$ItemName', '$Cost', '$Num', '$StaffID');";    
    $result = $conn->query($sql); 
   
    $ItemID = mysql_insert_id(conn);
   
    if($result) {
	header("location: ../staff.html");
    }
    else {
	die('Failed to Add Item: ' . mysql_error());
    }
    
    $conn->close();  	
    	 
?>

