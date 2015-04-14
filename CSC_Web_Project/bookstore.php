<?php
	session_start();
?>
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!--
   Author: Justin Hartz
   Creation Date: September 4, 2014
   Due Date: September 11, 2014
   Course: CSC 242
   Professor Name: Dr. Frye
   Assignment: Create base Bookstore
   Filename: Bookstore.html
   Purpose: Beginnings of my BookStore. 
			Currently uses XHTML. 
			In future it will also use CSS JavaScript and PHP
-->

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<!-- link to my css file named Master.css--> 
	<link rel="stylesheet" type="text/css" href="Master.css" />

	<!-- title of the webpage that shows up in tab -->
	<title>Justin's Bookstore</title>
</head>
<body>	
	<?php
		require('header.php');
	?>
	
	<br>
	<!-- Brief description of what the page is for -->
	<p class="center">This website for a bookstore in which you can "buy" books.</p>
	
	<!-- All of my contact information -->
	<p class="center small">Contact Information<br>
	    Name: Justin Hartz<br>
	    Email: <a href="mailto:jhart353@live.kutztown.edu">jhart353@live.kutztown.edu</a></p>
		
	<!-- Disclaimer to anyone that may be viewing this site -->
	<h6 class="center small">This is a student project it is <bold>NOT<bold> an actual bookstore. <br> 
		Any orders placed are fake and you should not expect to recieve <br> 
		anything from this website or anyone involved with this site.</h6>
</body>
</html>
