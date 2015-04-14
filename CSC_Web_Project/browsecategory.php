<?php
	session_start();
?>
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!--
   Author: Justin Hartz
   Creation Date: November 13, 2014
   Due Date: November 24, 2014
   Course: CSC 242
   Professor Name: Dr. Frye
   Assignment: Create browse product page
   Filename: browsecategories.php
   Purpose: Allow user to browse categories
-->

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<!-- link to my css file named Master.css--> 
	<link rel="stylesheet" type="text/css" href="Master.css" />

	<!-- title of the webpage that shows up in tab -->
	<title>Browse Categories</title>
</head>
<body>	
	<?php
		require('header.php');
	?>
<?php 
require('dbconn.php');
db_connect();
$query ="SELECT * FROM Categories";
$result = mysql_query($query);
if(mysql_num_rows($result) == 0) {
	echo("AN ERROR HAS OCCURED");
} else {
	for($i = 0; $i < mysql_numrows($result); $i++) {
		$catName = mysql_result($result, $i, "CategoryName");
		$catID = mysql_result($result, $i, "CategoryID");
		echo ("<a href='products.php?catID=$catID&catName=$catName'>$catName</a><br>");
	}
}

/*$query ="SELECT * FROM Customers";
$result = mysql_query($query);
if(mysql_num_rows($result) == 0) {
	echo("AN ERROR HAS OCCURED");
} else {
	for($i = 0; $i < mysql_numrows($result); $i++) {
		$email = mysql_result($result, $i, "Email");
		$password = mysql_result($result, $i, "Passwd");
		print ($email . ": " . $password . "</br>");
	}
}*/

db_close();
?>
</body>
</html>