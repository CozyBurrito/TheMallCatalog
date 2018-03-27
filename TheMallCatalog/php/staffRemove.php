<?php
        
    // Connect to database
    $config = parse_ini_file('../../db/db.ini');
    $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);

    if ($conn->connect_error) {
        die("Connection failed" . $conn->connect_error);
    }   
     
     
?>

