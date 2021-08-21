
    <head>
        <title>Creating a new user in DB</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <?php
            try{
                $servername = 'localhost';
                $username = 'root';
                $password = '';
                $dbname = 'accounts';

                $connection = mysqli_connect($servername, $username, $password, $dbname);

            } catch (mysqli_sql_exception $e){
                die("Connection failed: " . mysqli_connect_error());
            }
                $usern = filter_input(INPUT_POST, 'username');
                $result = mysqli_query($connection, "SELECT * FROM `login` WHERE username = '".$usern."'");

            if(mysqli_num_rows($result) > 0){
                printf("Select returned %d rows.\n", mysqli_num_rows($result));
            } else { 
                $stmt = mysqli_prepare($connection, "INSERT INTO `login` VALUES (?, ?, ?)");
                mysqli_stmt_bind_param($stmt, 'sss', $username, $email, $password);
                $username = filter_input(INPUT_POST, 'username');
                $email = filter_input(INPUT_POST, 'email');
                $password = filter_input(INPUT_POST, 'password');
                
                mysqli_stmt_execute($stmt);
                echo '<pre>'.mysqli_error($connection).'</pre>';
                mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);
            }
            mysqli_close($connection);
        ?>
    </body>
    </html>