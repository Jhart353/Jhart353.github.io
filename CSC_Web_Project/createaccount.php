<?php
	session_start();
?>
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!--
   Author: Justin Hartz
   Creation Date: October 15, 2014
   Due Date: October 21, 2014
   Course: CSC 242
   Professor Name: Dr. Frye
   Assignment: Create a create account page
   Filename: createaccount.html
   Purpose: Allows anyone who visits the site to create an account.
-->

<html>
<head>
	<!-- External JavaScript page -->
	<script src="functions.js" type="text/javascript"> </script>
	
	<!-- link to my css file named Master.css--> 
	<link rel="stylesheet" type="text/css" href="Master.css" />
	
	<!-- Title of the page -->
	<title>Create Account</title>	
	<style>
	</style>
</head>
<body>
	<?php
		require('header.php');
	?>
	<!-- Form to create an account for the bookstore. -->
	<p>* Note: asterisk marks required field.</p>
	<form method="post"
		  action="accountcreate.php"
		  onreset="return confirm('Are you sure you want to clear all form values?');"
		  onsubmit="return checkCAForm();">
		  
		*First Name:<br> 
			<input type="text" class="reqItem" id="firstName" name="firstName"/><br>
		*Last Name:<br> 
			<input type="text" class="reqItem" id="lastName" name="lastName"/><br>
		*Email:<br>
			<input type="text" class="reqItem" id="email" name="email"/><br>
		*Confirm Email:<br>
			<input type="text" class="reqItem" id="confirmEmail" name="confirmEmail"/><br>
		Phone Number:<br>
			<input type="text" maxlength="10" id="phoneNumber" name="phoneNumber"/><br>
		*Password:<br>
			<input type="password" class="reqItem" id="password" name="password"/><br>
		*Confirm Password:<br>
			<input type="password" class="reqItem" id="confirmPassword" name="confirmPassword"/><br>
		*Address Line 1:<br>
			<input type="text" class="reqItem" id="address" name="address"/><br>
		Address Line 2:<br>
			<input type="text" id="addressTwo" name="addressTwo"/><br>
		*City:<br>
			<input type="text" class="reqItem" id="city" name="city"/><br>
		*State:<br> 
		<!-- Options from http://www.freeformatter.com/usa-state-list-html-select.html -->
			<select class="reqItem" id="state" name="state">
				<option value="AL">Alabama</option>
				<option value="AK">Alaska</option>
				<option value="AZ">Arizona</option>
				<option value="AR">Arkansas</option>
				<option value="CA">California</option>
				<option value="CO">Colorado</option>
				<option value="CT">Connecticut</option>
				<option value="DE">Delaware</option>
				<option value="DC">District of Columbia</option>
				<option value="FL">Florida</option>
				<option value="GA">Georgia</option>
				<option value="HI">Hawaii</option>
				<option value="ID">Idaho</option>
				<option value="IL">Illinois</option>
				<option value="IN">Indiana</option>
				<option value="IA">Iowa</option>
				<option value="KS">Kansas</option>
				<option value="KY">Kentucky</option>
				<option value="LA">Louisiana</option>
				<option value="ME">Maine</option>
				<option value="MD">Maryland</option>
				<option value="MA">Massachusetts</option>
				<option value="MI">Michigan</option>
				<option value="MN">Minnesota</option>
				<option value="MS">Mississippi</option>
				<option value="MO">Missouri</option>
				<option value="MT">Montana</option>
				<option value="NE">Nebraska</option>
				<option value="NV">Nevada</option>
				<option value="NH">New Hampshire</option>
				<option value="NJ">New Jersey</option>
				<option value="NM">New Mexico</option>
				<option value="NY">New York</option>
				<option value="NC">North Carolina</option>
				<option value="ND">North Dakota</option>
				<option value="OH">Ohio</option>
				<option value="OK">Oklahoma</option>
				<option value="OR">Oregon</option>
				<option value="PA">Pennsylvania</option>
				<option value="RI">Rhode Island</option>
				<option value="SC">South Carolina</option>
				<option value="SD">South Dakota</option>
				<option value="TN">Tennessee</option>
				<option value="TX">Texas</option>
				<option value="UT">Utah</option>
				<option value="VT">Vermont</option>
				<option value="VA">Virginia</option>
				<option value="WA">Washington</option>
				<option value="WV">West Virginia</option>
				<option value="WI">Wisconsin</option>
				<option value="WY">Wyoming</option>
			</select><br>
		*ZIP:<br> 
			<input type="text" maxlength="5" class="reqItem" id="zip" name="zip"/><br>
		<input type="submit" value="Submit"/>
		<input type="reset" value="Reset"/>
	</form>
</body>
</html>