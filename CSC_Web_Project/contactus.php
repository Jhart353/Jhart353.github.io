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
   Assignment: Create a contact us page
   Filename: contactus.html
   Purpose: Tells users how to cant us by either phone email usps main and a
			form they can submit
-->

<html>
<head>
	<!-- External JavaScript page -->
	<script src="functions.js" type="text/javascript"> </script>
	
	<!-- link to my css file named Master.css--> 
	<link rel="stylesheet" type="text/css" href="Master.css" />
	
	<!-- Title of the page -->
	<title>Contact Us</title>	
</head>
<body>
	
	<?php
		require('header.php');
	?>
	<p class="center">This company was founded in August of 2014. The purpose of this company is to provide the <br>quickest and easiest way to buy books. It is a very small company with 0 books currently on sale.</p>
	<h3>How to contact us</h3>
	<h5>Email:</h5>
	<p><a href="mailto:jhart353@live.kutztown.edu">jhart353@live.kutztown.edu<a/></p>
	<h5>By Phone:<h5>
	<p>(111)-222-3333<p>
	<h5>Shipping Address:</h5>
	<p>Justin's Bookstore<br>
	1234 thatstreet<br>
	thattown, Pa 12345</p>
</body>
</html>