<?php
	if($_SESSION["loggedIn"] == TRUE) {
			echo ("<div class='welcome'>");
			echo ("Welcome: ");
			echo ($_SESSION["firstName"] . " ");
			echo ($_SESSION["lastName"]);
			echo ("</div>");
		}    
	echo "<noscript>Your browser does not support JavaScript.</noscript>";
	echo "<h1>Justin's Bookstore</h1>";
	echo "<ul class='nav-bar center'>";
	echo "<li/id=''><a href='bookstore.php'>Home<a/><li>";
	echo "<li id=''><a href='createaccount.php'>Create Account</a></li>";
	echo "<li id=''><a href='login.php'>Login</a></li>";
	echo "<li id=''><a href='browsecategory.php'>Browse Catalog</a></li>";
	echo "<li id=''><a href='searchcatalog.php'>Search Catalog</a></li>";
	echo "<li id=''><a href=''>Checkout</a></li>";
	echo "<li id=''><a href='checkorderstatus.php'>Check order status</a></li>";
	echo "<li id=''><a href='contactus.php'>Contact Us</a></li>";
	echo "<li id=''><a href='logout.php'>Logout</a></li>";
	echo "</ul>";
	echo "<hr noshade>";
?>	