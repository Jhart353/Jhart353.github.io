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
	<title>Products</title>
</head>
<body>	
	<?php
		require('header.php');
		$query ="SELECT * FROM Categories";
		$result = mysql_query($query);
		if(mysql_num_rows($result) == 0) {
			echo("AN ERROR HAS OCCURED");
		} else {
			echo "<ul class='center, nav-bar'>";
			for($i = 0; $i < mysql_numrows($result); $i++) {
				$catName = mysql_result($result, $i, "CategoryName");
				$catID = mysql_result($result, $i, "CategoryID");
				
				echo ("<li><a href='products.php?catID=$catID&catName=$catName'>$catName</a></li>");
			}
			echo "<br>";
		}
		$catID = $_GET['catID'];
		$catName = $_GET['catName'];
		$query = "SELECT * FROM Products WHERE CategoryID='$catID'";
		$result = mysql_query($query) or die("ERROR TRING TO FIND PRODUCTS");
		$numrows = mysql_numrows($result);
		echo ("<h2>$catName</h2>");
		echo ("<form action='' method='get'>");
		echo ("<table>");
		if($numrows > 0) {
			for($i = 0; $i < $numrows; $i++){
				$title = mysql_result($result, $i, "Title");
				$authorOne = mysql_result($result, $i, "Author1");
				$authorTwo = mysql_result($result, $i, "Author2");
				$authorThree = mysql_result($result, $i, "Author3");
				$price = mysql_result($result, $i, "Price");
				$titleString = $title . 'Amt';
				echo ("<tr>");
				echo ("<td>$title</td>" . "<td>'$authorOne'");
				if ($authorTwo != "") {
					echo (", " . $authorTwo);
					if ($authorThree != "") {
						echo(", " . $authorThree);
					}
				}
				echo ("</td>");
				echo ("<td>$" . money_format("%.2n",$price) . "</td>");
				echo ("<td><input type='text' id='$titleString' name='$titleString' size=1' maxlength='3'/></td></tr>");
			}
			echo("</table><input type='submit' value='Submit'/></form>");
		} else {
			echo ("No books in this category at this time");
			echo("</table></form>");
		}	
		
	?>
</body>
</html>