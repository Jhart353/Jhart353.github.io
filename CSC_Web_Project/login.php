<?php
	session_start();
?>
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!--
   Author: Justin Hartz
   Creation Date: October 17, 2014
   Due Date: October 21, 2014
   Course: CSC 242
   Professor Name: Dr. Frye
   Assignment: Create a login page
   Filename: login.php
   Purpose: Allows users to log into their accounts on this page.
-->

<html>
<head>
	<!-- External JavaScript page -->
	<script src="functions.js" type="text/javascript"> </script>
	
	<!-- link to my css file named Master.css--> 
	<link rel="stylesheet" type="text/css" href="Master.css" />
	
	<!-- Title of the page -->
	<title>Login</title>	
</head>
<body>
	<?php
		require('header.php');
	?>
	<form method="post"
		  action="attemptlogin.php"
		  onreset="return confirm('Are you sure you want to clear all form values?');"
		  onsubmit="">
		<table align="center">
			<tr>
				<td colspan="2"><span>Email:</span></td>
			</tr>
			<tr>
				<td colspan="2"><input type="email" id="email" name="email" size="25"/></td>
			</tr>
			<tr>
				<td colspan="2"><span>Password:</span></td>
			</tr>
			<tr>
				<td colspan="2"><input type="password" id="password" name="password" size="25"/></td>
			</tr>
			<tr>
				<td><input type="submit" value="Login" id="login"></td>
				<td><input type="button" value="CreateAccount" onclick="window.location.href='createaccount.php'" id="login"></td>
			</tr>
		</table>
	</form>
</body>
</html>