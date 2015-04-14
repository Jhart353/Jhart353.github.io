<?php

$connection;

// connecto to the bookstore DB
function db_connect()
{
   $DB_NAME = "bookstore";
   $DB_HOST = "localhost";

   // NOTE: You need to edit the next 2 lines to add your information
   $DB_USER = "jhart353";
   $DB_PASS = "buZutH2c";

   // global keyword required to make variable have global scope 
   global $connection;
      
   $connection = mysql_connect($DB_HOST, $DB_USER, $DB_PASS)
      or die("Cannot connect to $DB_HOST as $DB_USER:" . mysql_error());
      
   mysql_select_db($DB_NAME) or die ("Cannot open $DB_NAME:" . mysql_error());
}  // end function db_connect


// close connection to bookstore DB
function db_close()
{
   global $connection;
   mysql_close($connection);
}  // end function db_close

?>