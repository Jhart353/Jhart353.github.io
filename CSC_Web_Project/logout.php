<?php
	session_start();
?>
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!--
   Author: Justin Hartz
   Creation Date: November, 13 2014
   Due Date: November, 24 2014
   Course: CSC 242
   Professor Name: Dr. Frye
   Assignment: Log user out of account
   Filename: logout.php
   Purpose: Log user out of account by destroying session.
-->

<html>
<head>
	<!-- link to my css file named Master.css--> 
	<link rel="stylesheet" type="text/css" href="Master.css" />

	<!-- title of the webpage that shows up in tab -->
	<title>Log Out User</title>
</head>
<body>
	<?php
		$wasLogged = $_SESSION["loggedIn"];
		session_unset();
		session_destroy();
		if ($wasLogged) {
			echo "<p> Successfully logged out. </p>";
		} else {
			echo "<p> User was not logged in. </p>";
		}
		header("Location: bookstore.php");
	?>
	
	<script>
		window.location = "bookstore.php"
	</script>
	
</body>
</html>