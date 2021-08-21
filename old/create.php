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
	$numRows = mysqli_num_rows($result);
if($numRows > 0){
	#echo("Username is already taken");
	
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

#BUTTON HOVER STYLE
print ("<style>");
print (".reset-btn{
	cursor: pointer;
	font-family: Verdana;
	height: 50px;
	width: max(10%, 100px);
	background: #C0C0C0;
	border: 1px solid black;
	border-radius: 15px;
	color: #000;
	}");
print (".reset-btn:hover{
	background: #A9A9A9;
	}");
print ("</style>");


#RESULT PAGE BACKGROUND IMAGE
print("<body style='height: 100%;
	background-color: rgba(238,238,213,.5);
	background-attachment: fixed;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	justify-content: center;
	align-content: center;
	font-family: Verdana;'>");

#RESULT PAGE HEADER

#CHECKS IF ACCOUNT CREATION WAS SUCCESSFUL, IF YES: FORWARD TO LOGIN. IF NO: RETURN BACK.
$status = "";
$destination = "";
$button = "";

if ($numRows > 0) {
	$status = "Username Already Taken";
	$destination = "createuser.html";
	$button = "Try Again";
}
else{
	$status = "Account Creation Successful";
	$destination = "login.html";
	$button = "Login";
}
print("<h1 style='font-family: Verdana; color: #000000;
	margin-bottom: 70 px;
	font-size: max(3vw, 35px);
	letter-spacing: 2px;
	text-align: center;'>".$status."</h1>");
	
#RESULT PAGE TOP BUTTON
// print ("<form action = 'createuser.html' method = 'post' style = 'text-align: center'>
		// <input type = 'submit' value = 'Go Back'  class='reset-btn'> </form>");
	
	
#$search_query->close();


#BOTTOM PAGE RESET BUTTON
print ("<form action = '".$destination."' method = 'post' style = 'text-align: center; '>
		<input type = 'submit' value = '".$button."' class='reset-btn'> </form>");

print("</body>");






#MISC CODE THAT MAY NOT BE NEEDED
#$search_rows = $search_query->num_rows;
#$search_query->bind_result($award_id);

#if($search_rows > 0){
	#while($search_query->fetch()){
		#echo "Your search returned $search_rows results";
		#echo "$award_id <br>";
	#}
#} 
#else { echo "Your search returned no results, sorry :("; }

?>