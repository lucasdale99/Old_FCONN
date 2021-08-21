<?php
include 'connect.php';

#$search = $_POST['search']."*";

#THE ACTUAL SEARCHED INFO
$username = $_POST['username'];
#$username = 'username';
#$typedusername = "%".$username."%";

$email = $_POST['email'];
#$email = 'email';
#$typedemail = "%".$email."%";

$password = $_POST['password'];
#$password = 'password';
#$typedpassword = "%".$password."%";

#CHECK IF USERNAME ALREADY EXISTS

#print ("IF EXISTS(");

#$search_query = $link->prepare("SELECT username FROM accounts.login WHERE username like (?)");
#$search_query->bind_param('s', $typedusername);
#$search_query->execute();

#$search_query = $link->prepare("IF EXISTS(
#									SELECT username FROM accounts.login WHERE username like (?) )
									// BEGIN 
										// PRINT 'That username is already taken' 
								// END;");
// $search_query->bind_param('s', $username);
// $search_query->execute();


// $search_query->close();














ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

#$stmt_check = $link->prepare('SELECT * FROM accounts.login');
$stmt_check = $link->prepare('SELECT * FROM accounts.login WHERE username = ? ');
$stmt_check->bind_param('s', $username);
$stmt_check->execute();


$stmt = $link->prepare("INSERT INTO accounts.login VALUES (?, ?, ?)");
$stmt->bind_param('sss', $username, $email, $password);
if($stmt_check->num_rows > 0) {
    echo 'username is already taken';	
} 
#$stmt_check->close();

else {
    //$stmt = $link->prepare("INSERT INTO accounts.login (username, email, password) VALUES (?, ?, ?)");
	// $stmt = $link->prepare("INSERT INTO (accounts.login.username, accounts.login.email, accounts.login.password) VALUES (?, ?, ?)");
    //$stmt->bind_param('sss', $username, $email, $password);
    $stmt->execute();
	//$link->query("INSERT INTO accounts.login (username, email, password) VALUES ('".$username."','".$email."','".$password."')");
	//echo("INSERT INTO accounts.login (username, email, password) VALUES (".$username.",".$email.",".$password.")");
    // header('Location: ../login.php');
}
$stmt_check->close();    
$stmt->close();
//printf(mysqli_stmt_affected_rows($mysqli_stmt));

//$link->close();
























#print ("INSERT INTO login (username, email, passwords) VALUES (?)"
// $search_query2 = $link->prepare("INSERT INTO login (username, email, passwords) VALUES (?, ?, ?)");
// $search_query2->bind_param('sss', $email, $password, $username);
// $search_query2->execute();


// $search_query2->close();


#BUTTON HOVER STYLE
print ("<style>");
print (".reset-btn{
	cursor: pointer;
	font-family: Verdana;
	height: 50px;
	width: max(10%, 100px);
	background: #C0C0C0;
	border: none;
	border-radius: 15px;
	color: #000;
	}");
print (".reset-btn:hover{
	background: #A9A9A9;
	}");
print ("</style>");


#RESULT PAGE BACKGROUND IMAGE
print("<body style='height: 100%;
	background-attachment: fixed;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	justify-content: center;
	align-content: center;
	font-family: Verdana;'>");

#RESULT PAGE HEADER
print("<h1 style='font-family: Verdana; color: #000000;
	margin-bottom: 70 px;
	font-size: max(3vw, 35px);
	letter-spacing: 2px;
	text-align: center;'>Account Creation Successful</h1>");
	
#RESULT PAGE TOP BUTTON
// print ("<form action = 'createuser.html' method = 'post' style = 'text-align: center'>
		// <input type = 'submit' value = 'Go Back'  class='reset-btn'> </form>");
	
	
#$search_query->close();


#BOTTOM PAGE RESET BUTTON
print ("<form action = 'login.html' method = 'post' style = 'text-align: center; '>
		<input type = 'submit' value = 'Login' class='reset-btn'> </form>");

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