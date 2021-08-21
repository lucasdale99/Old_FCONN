<?php 
 // Connects to Our Database 
try{
	$link = new mysqli('localhost', 'root', '', 'accounts');
} catch (mysqli_sql_exception_ $e){
	die("failed: " . mysqli_connect_error());
}
	
/* check connection */
if (mysqli_connect_errno()) {
    echo "Could not connect to database, please check your connection details";
    exit();
}

 ?>