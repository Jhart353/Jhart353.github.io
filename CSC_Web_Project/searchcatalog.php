<?php
	session_start();
	require("dbconn.php");
	db_connect();
?>
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!--
   Author: Justin Hartz
   Creation Date: November 18, 2014
   Due Date: November 24, 2014
   Course: CSC 242
   Professor Name: Dr. Frye
   Assignment: Create Search Page
   Filename: searchcatalog.php
   Purpose: Allow user to search for books
-->

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<!-- link to my css file named Master.css--> 
	<link rel="stylesheet" type="text/css" href="Master.css" />

	<!-- title of the webpage that shows up in tab -->
	<title>Search Catalog</title>
</head>
<body>
	<?php
		require("header.php");
	?>
	<form action="searchcatalog.php" method="get">
		<input type="text" id="qwry_s" name="qwry_s"/>
		<input type="submit" value="Search"/>
	</form>
	<?php	$qwry_s = $_GET['qwry_s'];
		if ($qwry_s !="" ) {
			$query = "SELECT * FROM Products WHERE (Author1 LIKE '$qwry_s%'
													OR Author2 LIKE '$qwry_s%' 
													OR Author3 LIKE '$qwry_s%' 
													OR Title LIKE '$qwry_s%'
													OR Price LIKE '$qwry_s%'
													OR ProductID LIKE '$qwry_s%')";
			$result = mysql_query($query);
			if (mysql_num_rows($result) != 0) {
				echo("<form>");
				echo ("<table>");
				for ($i = 0; $i < mysql_num_rows($result); $i++) {
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
				echo("No products match your search.");
			}
		}
	?>
	
</body>
</html>
