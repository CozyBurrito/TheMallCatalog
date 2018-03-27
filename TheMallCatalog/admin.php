<?php
	session_start();
?>

<!DOCTYPE html>

<html>
    <head>
        <title>The Mall Catalog - Admin</title>
    </head>
	
    <body>
        <h1>Welcome Admin</h1>
        echo "$_SESSION["AccountID"]";
        
		<form action="php/logout.php">
    		<input type="submit" value="Logout" />
		</form>
		
    </body>
</html>