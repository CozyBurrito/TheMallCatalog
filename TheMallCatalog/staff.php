<!DOCTYPE html>

<html>
    <head>
        <title>The Mall Catalog - Staff</title>
    </head>
	
    <body>
        <h1>Welcome Staff</h1>
        
        <h2>Add item to Store</h2>
        <form action ="php/staffAdd.php" method ="post">
        	Store Name               : <input type="text" name="StoreName"><br>
        	Item Name                : <input type="text" name="ItemName"><br> 
        	Cost                     : <input type="text" name="Cost"><br>
                Initial Number In Stock  : <input type="text" name="Num"><br> 
        	<input type="submit" value="Submit">        	      	
        </form>
        
        <h3>Remove item from Store</h3>
        <form action ="/staffRemove.php" method ="post">
        	Store Name      : <input type="text" name="RStore Name"><br>
        	Item ID         : <input type="text" name="RItem Name"><br> 
        	<input type="submit" value="Submit"> 
        </form>
        
    </body>
</html>