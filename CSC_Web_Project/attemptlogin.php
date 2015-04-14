<?php
	session_start();
	require('dbconn.php');
	db_connect();
?>
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!--
   Author: Justin Hartz
   Creation Date: November 11, 2014
   Due Date: November 13, 2014
   Course: CSC 242
   Professor Name: Dr. Frye
   Assignment: Allow user to log in
   Filename: attemptlogin.html
   Purpose: Allows users to log into their accounts.
-->
<html>
<head>	
	<!-- link to my css file named Master.css--> 
	<link rel="stylesheet" type="text/css" href="Master.css" />
	
	<!-- Title of the page -->
	<title>Attempt Login</title>	
	<style>
	</style>
</head>
<body>
	<?php
		require('header.php');
		$email = $_POST['email'];
		$password = $_POST['password'];
		$query = "SELECT * FROM Customers WHERE Email = '$email'";
		$result = mysql_query($query);
		if(mysql_num_rows($result) == 0) {
			print ("Unable to log in. 234235");
		} else {
			$foundPW = mysql_result($result, 0, "Passwd");
			if($foundPW == $password){
				print ("Successfully logged in.");
				$_SESSION["loggedIn"] = TRUE;
				$_SESSION["firstName"] = mysql_result($result, 0, "firstName");
				$_SESSION["lastName"] = mysql_result($result, 0, "lastName");
				$_SESSION["custID"] = mysql_result($result, 0, "CustomerID");
				echo ("<script>
					window.location = 'bookstore.php'
				</script>");
			} else {
				print ("Unable to log in.");
			}
		}
		db_close();
	?>
	
	
</body>
</html
