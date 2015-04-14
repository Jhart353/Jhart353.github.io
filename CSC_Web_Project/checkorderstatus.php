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
   Assignment: Create checkorderstatus
   Filename: checkorderstatus.php
   Purpose: Allow user to check the status of their order.
-->

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<!-- link to my css file named Master.css--> 
	<link rel="stylesheet" type="text/css" href="Master.css" />

	<!-- title of the webpage that shows up in tab -->
	<title>Check Order Status</title>
</head>
<body>
	<?php
		require("header.php");
		$custID = $_SESSION["custID"];
		$query = "SELECT * FROM Orders WHERE CustomerID = '$custID'";
		$result = mysql_query($query);
		if (mysql_num_rows($result) != 0) {
			echo ("<h1 class='center'>Your Orders</h1>");
			for($i = 0; $i < mysql_num_rows($result); $i++) {
				$orderID = mysql_result($result, $i, "OrderID");
				$shippingCost = mysql_result($result, $i, "ShippingCost");
				$tax = mysql_result($result, $i, "Tax");
				$total = mysql_result($result, $i, "Total");
				$orderDate = mysql_result($result, $i, "OrderDate");
				echo ("<a href='orderdetails.php?orderID=$orderID'>Order Number: $orderID</a> <br>$orderDate <br>");
				echo ("Shipping: $" . money_format("%.2n", $shippingCost) . "<br>Tax: $" . money_format("%.2n",$tax). "<br>Total: $" . money_format("%.2n",$total)."<br><br><br>"); 
			}
		} else {
			echo ("No orders found for this account");
		}
	?>
</body>
</html>