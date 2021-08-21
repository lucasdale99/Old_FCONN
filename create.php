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
	echo("
	<head>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	
	<p style='font-family: Verdana; color: #000000;
	margin-bottom: 70 px;
	font-size: max(3vw, 35px);
	letter-spacing: 2px;
	text-align: center;'>Account Creation Failed</p>
	<p style='font-family: Verdana; color: #911414;
	margin-bottom: 70 px;
	font-size: max(1vw, 25px);
	letter-spacing: 2px;
	text-align: center;'>Invalid Username</p>
	
	
	<style>
	
	#loader {
	  position: absolute;
	  left: 50%;
	  top: 50%;
	  z-index: 1;
	  width: 120px;
	  height: 120px;
	  margin: -76px 0 0 -76px;
	  border: 16px solid #f3f3f3;
	  border-radius: 50%;
	  border-top: 16px solid #39bf56;
	  -webkit-animation: spin 2s linear infinite;
	  animation: spin 2s linear infinite;
	}

	@-webkit-keyframes spin {
	  0% { -webkit-transform: rotate(0deg); }
	  100% { -webkit-transform: rotate(360deg); }
	}

	@keyframes spin {
	  0% { transform: rotate(0deg); }
	  100% { transform: rotate(360deg); }
	}

	/* Add animation to 'page content' */
	.animate-bottom {
	  position: relative;
	  -webkit-animation-name: animatebottom;
	  -webkit-animation-duration: 1s;
	  animation-name: animatebottom;
	  animation-duration: 1s
	}

	@-webkit-keyframes animatebottom {
	  from { bottom:-100px; opacity:0 } 
	  to { bottom:0px; opacity:1 }
	}

	@keyframes animatebottom { 
	  from{ bottom:-100px; opacity:0 } 
	  to{ bottom:0; opacity:1 }
	}
	
	</style>
	
	</head>
	
	
	<body onload='myFunction()' style='margin:0;'>

	<div id='loader'></div>

	<meta http-equiv = 'refresh' content = '3; url = createuser.html' />

	<script>
	var myVar;

	function myFunction() {
	  myVar = setTimeout(showPage, 3000);
	}

	function showPage() {
	  document.getElementById('loader').style.display = 'none';
	  document.getElementById('myDiv').style.display = 'block';
	}
	</script>
	</body>
	");
	
	
	
	
	
	
	
	
	
} else { 
	$stmt = mysqli_prepare($connection, "INSERT INTO `login` VALUES (?, ?, ?)");
	mysqli_stmt_bind_param($stmt, 'sss', $username, $email, $password);
	$username = filter_input(INPUT_POST, 'username');
	$email = filter_input(INPUT_POST, 'email');
	$password = filter_input(INPUT_POST, 'password');
	
	mysqli_stmt_execute($stmt);
	echo '<pre>'.mysqli_error($connection).'</pre>';
	mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);
	
	echo("
	<head>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	
	<p style='font-family: Verdana; color: #000000;
	margin-bottom: 70 px;
	font-size: max(3vw, 35px);
	letter-spacing: 2px;
	text-align: center;'>Account Creation Successful</p>
	
	
	<style>
	
	#loader {
	  position: absolute;
	  left: 50%;
	  top: 50%;
	  z-index: 1;
	  width: 120px;
	  height: 120px;
	  margin: -76px 0 0 -76px;
	  border: 16px solid #f3f3f3;
	  border-radius: 50%;
	  border-top: 16px solid #39bf56;
	  -webkit-animation: spin 2s linear infinite;
	  animation: spin 2s linear infinite;
	}

	@-webkit-keyframes spin {
	  0% { -webkit-transform: rotate(0deg); }
	  100% { -webkit-transform: rotate(360deg); }
	}

	@keyframes spin {
	  0% { transform: rotate(0deg); }
	  100% { transform: rotate(360deg); }
	}

	/* Add animation to 'page content' */
	.animate-bottom {
	  position: relative;
	  -webkit-animation-name: animatebottom;
	  -webkit-animation-duration: 1s;
	  animation-name: animatebottom;
	  animation-duration: 1s
	}

	@-webkit-keyframes animatebottom {
	  from { bottom:-100px; opacity:0 } 
	  to { bottom:0px; opacity:1 }
	}

	@keyframes animatebottom { 
	  from{ bottom:-100px; opacity:0 } 
	  to{ bottom:0; opacity:1 }
	}
	
	</style>
	
	</head>
	
	
	<body onload='myFunction()' style='margin:0;'>

	<div id='loader'></div>

	 <meta http-equiv = 'refresh' content = '3; url = login.html' />

	<script>
	var myVar;

	function myFunction() {
	  myVar = setTimeout(showPage, 3000);
	}

	function showPage() {
	  document.getElementById('loader').style.display = 'none';
	  document.getElementById('myDiv').style.display = 'block';
	}
	</script>
	</body>
	");
	
	
	
	
	
	
}
mysqli_close($connection);

#BUTTON HOVER STYLE
// print ("<style>");
// print (".reset-btn{
	// cursor: pointer;
	// font-family: Verdana;
	// height: 50px;
	// width: max(10%, 100px);
	// background: #C0C0C0;
	// border: 1px solid black;
	// border-radius: 15px;
	// color: #000;
	// }");
// print ("#loader {
  // position: absolute;
  // left: 50%;
  // top: 50%;
  // z-index: 1;
  // width: 120px;
  // height: 120px;
  // margin: -76px 0 0 -76px;
  // border: 16px solid #f3f3f3;
  // border-radius: 50%;
  // border-top: 16px solid #3498db;
  // -webkit-animation: spin 2s linear infinite;
  // animation: spin 2s linear infinite;
// }

	// @-webkit-keyframes spin {
	  // 0% { -webkit-transform: rotate(0deg); }
	  // 100% { -webkit-transform: rotate(360deg); }
	// }

	// @keyframes spin {
	  // 0% { transform: rotate(0deg); }
	  // 100% { transform: rotate(360deg); }
	// }

	// /* Add animation to 'page content' */
	// .animate-bottom {
	  // position: relative;
	  // -webkit-animation-name: animatebottom;
	  // -webkit-animation-duration: 1s;
	  // animation-name: animatebottom;
	  // animation-duration: 1s
	// }

	// @-webkit-keyframes animatebottom {
	  // from { bottom:-100px; opacity:0 } 
	  // to { bottom:0px; opacity:1 }
	// }

	// @keyframes animatebottom { 
	  // from{ bottom:-100px; opacity:0 } 
	  // to{ bottom:0; opacity:1 }
	// }");
	
	
// print (".reset-btn:hover{
	// background: #A9A9A9;
	// }");	
// print ("</style>");


#RESULT PAGE BACKGROUND IMAGE
// print("<body style='height: 100%;
	// background-color: rgba(238,238,213,.5);
	// background-attachment: fixed;
	// background-position: center;
	// background-repeat: no-repeat;
	// background-size: cover;
	// justify-content: center;
	// align-content: center;
	// font-family: Verdana;'>");

#RESULT PAGE HEADER

#CHECKS IF ACCOUNT CREATION WAS SUCCESSFUL, IF YES: FORWARD TO LOGIN. IF NO: RETURN BACK.
// $status = "";
// $destination = "";
// $button = "";

// if ($numRows > 0) {
	// $status = "Username Already Taken";
	// $destination = "createuser.html";
	// $button = "Try Again";
// }
// else{
	// $status = "Account Creation Successful";
	// $destination = "login.html";
	// $button = "Login";
// }
// print("<h1 style='font-family: Verdana; color: #000000;
	// margin-bottom: 70 px;
	// font-size: max(3vw, 35px);
	// letter-spacing: 2px;
	// text-align: center;'>".$status."</h1>");
	
#RESULT PAGE TOP BUTTON
// print ("<form action = 'createuser.html' method = 'post' style = 'text-align: center'>
		// <input type = 'submit' value = 'Go Back'  class='reset-btn'> </form>");
	
	
#$search_query->close();


#BOTTOM PAGE RESET BUTTON
// print ("<form action = '".$destination."' method = 'post' style = 'text-align: center; '>
		// <input type = 'submit' value = '".$button."' class='reset-btn'> </form>");

// print("</body>");






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