<?php
    // Connects to Our Database
    try {
        $db = new mysqli('localhost', 'root', '', 'accounts');
    } 
    catch (mysqli_sql_exception $e) {
        die("failed: " . mysqli_connect_error());
    }

    //check connection
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
?>
