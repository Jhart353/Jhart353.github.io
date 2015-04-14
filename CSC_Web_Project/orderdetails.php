<?php	session_start();
	require("dbconn.php");
	db_connect();
?>
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!--
   Author: Justin Hartz
   Creation Date: November 20, 2014
   Due Date: December 4, 2014
   Course: CSC 242
   Professor Name: Dr. Frye
   Assignment: Create orderdetails
   Filename: orderdetails.php
   Purpose: Allow user to view the details of their order
-->

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<!-- link to my css file named Master.css--> 
	<link rel="stylesheet" type="text/css" href="Master.css" />

	<!-- title of the webpage that shows up in tab -->
	<title>Order Details</title>
</head>
<body>
	<?php
		require("header.php");
		$orderID = $_GET["orderID"];
		$query = "SELECT * FROM Orders WHERE OrderID = '$orderID'";
		$result = mysql_query($query);
		
		$orderID = mysql_result($result, $i, "OrderID");
		$shippingCost = mysql_result($result, $i, "ShippingCost");
		$tax = mysql_result($result, $i, "Tax");
		$total = mysql_result($result, $i, "Total");
		$orderDate = mysql_result($result, $i, "OrderDate");
		echo ("<h1 class='center'>Order: $orderID</h1>");
		echo ("Order Created on: $orderDate");
		echo ("<table class='center'>");
		echo ("<tr><td>Title</td><td>Quantity</td><td>Price</td></tr>");
		$query = "SELECT * FROM OrderDetails WHERE OrderID = $orderID";
		$result2 = mysql_query($query);
		for($j = 0; $j < mysql_num_rows($result2); $j++) {
			$productID = mysql_result($result2, $j, "ProductID");
			$quantity = mysql_result($result2, $j, "Quantity");
			$lineTotal = mysql_result($result2, $j, "LineTotal");
			$query = "SELECT * FROM Products WHERE ProductID = '$productID'";
			$result3 = mysql_query($query);
			$title = mysql_result($result3, 0, "Title");
			
			echo ("<tr><td>$title</td><td>$quantity</td><td> $" . money_format("%.2n",$lineTotal) . "</td></tr>");
		}
		echo("</table>");
		echo ("Shipping: $" . money_format("%.2n",$shippingCost) . "<br>Tax: $" . money_format("%.2n",$tax) . "<br>Total: $" . money_format("%.2n",$total) . "<br><br><br>"); 
	?>
	<form action="checkorderstatus.php">
		<input type="submit" value="Return to Check Order Status"/>
	</form>	
</body>
</html>