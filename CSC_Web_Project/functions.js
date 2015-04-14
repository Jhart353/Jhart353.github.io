/************************************************************************/
/* Author: Justin Hartz													*/
/* Creation Date: Septembet 23, 2014									*/
/* Due Date: None														*/
/* Course: CSC 242														*/
/* Professor Name: Dr. Frye												*/
/* Assignment: None														*/
/* Filename: functions.js												*/
/* Purpose: Contain all of the Javascript methods 						*/
/*			that I write for CSC242										*/
/************************************************************************/

/************************************************************************/
/* Function name: timeOfDay 											*/
/* Description: Function gets the time of day and outputs in 			*/
/*				in the form: 											*/
/*				Good [morning/afternoon/evening] it is dd/mm/yyyy hh:mm	*/
/* Parameters: none														*/
/* Return Value: none													*/
/************************************************************************/
function timeOfDay() {
	var date = new Date();
	var month = date.getMonth() + 1
	var day = date.getDate();
	var hour = date.getHours();
	var minutes = date.getMinutes();
	
	document.write("<p class=\"date\">Good ");
	
	if (hour < 12){
		document.write("morning ");
	}
	else if (hour < 18){
		document.write("afternoon ");
	} else {
		document.write("evening ");
	}
	
	document.write("it is ");
	
	// Add a 0 if the month is only one digit
	if (month < 10){
		document.write("0");
	}
	document.write(month + "/");
	
	// Add 0 if the day is only one digit
	if (day < 10){
		document.write("0");
	}
	document.write(day + "/" + date.getFullYear() + " ");
				   
	// Add a 0 if the hour is only one digit				
	if (hour < 10){
		document.write("0");
	}
	document.write(hour + ":");
	
	// Add a 0 if the minute is only one digit
	if (minutes < 10){
		document.write("0");
	}
	document.write(minutes + "</p>");
}

/************************************************************************/
/* Function name: favoriteThings										*/
/* Description: Takes an unsorted array, sorts it, then outputs 		*/
/*				it to the console in sorted order.						*/
/* Parameters: The unsorted array										*/
/* Return Value: none													*/
/************************************************************************/

function favoriteThings(favoriteArray) {
	favoriteArray.sort();
	document.write("&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp");
	
	for (var i = 0; i < favoriteArray.length; i++) {
		document.write(favoriteArray[i]);
		if (i != favoriteArray.length - 1)
			document.write(", ");
	}
}

/************************************************************************/
/* Function name: checkCAForm 											*/
/* Description: Does all validation for Create Account Form				*/
/* Parameters: none														*/
/* Return Value: If form is valid or not								*/
/************************************************************************/
function checkCAForm() {
	fnc = document.getElementById("firstName");
	lnc = document.getElementById("lastName");
	emc = document.getElementById("email");
	cec = document.getElementById("confirmEmail");
	pwc = document.getElementById("_password");
	cpc = document.getElementById("confirmPassword");
	a1c = document.getElementById("address1");
	cic = document.getElementById("city");
	stc = document.getElementById("state");
	zic = document.getElementById("zip");
	// Make sure user entered their first name
	if (fnc.value == "") { alert("You must enter your first name"); fnc.focus(); return false; }
	// Make sure user entered their last name
	if (lnc.value == "") { alert("You must enter your last name"); lnc.focus(); return false; }
	// Make sure user entered an email address
	if (emc.value =="") { alert("You must enter your email address"); emc.focus(); return false; }
	// Make sure email and confirm email are the same
	if (emc.value != cec.value) { alert("Your email addresses must be the same"); emc.focus(); return false; }
	// Make sure user entered a password
	if (pwc.value == "" || pwc.value.length < 8) { alert("You must create a password of at least length 8"); pwc.focus(); return false; }
	// Make sure users entered matching passwords
	if (pwc.value != cpc.value) { alert("Passwords must match"); pwc.focus(); return false; }
	// Make sure useres entered their address
	if (a1c.value == "") { alert("You must enter your address"); a1c.focus(); return false; }
	// Make cure user entered their city
	if (cic.value == "") { alert("You must enter your city"); cic.focus(); return false; }
	// Make sure user chose a state
	if (stc.options[stc.selectedIndex].value == "Select") { alert("You must choose a state"); stc.focus(); return false; }
	// Make sure zip code is valid 
	if (zic.value == "" || zic.value.length != 5 || isNaN(zic.value)) { alert("You must enter a 5-digit zip code"); zic.focus(); return false; }	
	return true;
}


























