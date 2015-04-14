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
   Creation Date: November 5, 2014
   Due Date: November 13, 2014
   Course: CSC 242
   Professor Name: Dr. Frye
   Assignment: Log user into DB
   Filename: accountcreate.html
   Purpose: Attempt to add user credentials to DB
-->

<html>
<head>	
	<!-- link to my css file named Master.css--> 
	<link rel="stylesheet" type="text/css" href="Master.css" />
	
	<!-- Title of the page -->
	<title>Create Account</title>	
	<style>
	</style>
</head>
<body>
	<?php 
		require('header.php');
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$email = $_POST['email'];
		$confirmEmail = $_POST['confirmEmail'];
		$password = $_POST['password'];
		$confirmPassword = $_POST['confirmPassword'];
		$phoneNumber = $_POST['phoneNumber'];
		$address = $_POST['address'];
		$addressTwo = $_POST['addressTwo'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$zip = $_POST['zip'];
		
		$query = "SELECT Email FROM Customers WHERE Email='$email'";
		$result = mysql_query($query);
		if(mysql_num_rows($result) != 0) {
			echo "Account Exists.";
			session_destroy();
		} else {
			$query = "INSERT INTO Customers (Email, Passwd, FirstName, LastName, 
					Address1, Address2, City, State, ZipCode, PhoneNumber) 
				VALUES ('$email','$password','$firstName','$lastName',
					'$address','$addressTwo','$city','$state', 
					$zip, '$phoneNumber')";
			$result = mysql_query($query);
			if ($result) {
				echo "Account created successfully";
				$session["loggedIn"] = TRUE;
			} else {
				echo "Error: " . $query . "<br>" . mysql_error();
			}
		}
		db_close();
		?>
</body>
</html>