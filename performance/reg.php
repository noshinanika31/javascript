<!DOCTYPE html>
<html lang="en">
<head>
 
 <title>JavaScript Form Validation using a sample registration form</title>
 
<link rel='stylesheet' href='c.css' type='text/css' />
<script src="f.js"></script>
</head>
<body onload="document.registration.userid.focus();">
 <h1>Registration Form</h1>

This is a registration form which validate by javascript!

<form name='registration' onSubmit="return formValidation();">
<ul>
    <li><label for="userid">User id:</label></li>
    <li><input type="text" name="userid" size="12" /></li>
	<li><label for="passid">Password:</label></li>
	<li><input type="password" name="passid" size="12" /></li>
	<li><label for="username">Name:</label></li>
	<li><input type="text" name="username" size="50" /></li>
	<li><label for="address">Address:</label></li>
	<li><input type="text" name="address" size="50" /></li>

	<li><label for="zip">ZIP Code:</label></li>
	<li><input type="text" name="zip" /></li>
	<li><label for="email">Email:</label></li>
	<li><input type="text" name="email" size="50" /></li>
	<li><label id="gender">Gender:</label></li>
	<li><input type="radio" name="msex" value="Male" /><span>Male</span></li>
	<li><input type="radio" name="fsex" value="Female" /><span>Female</span></li>


	<li><input type="submit" name="submit" value="Submit" /></li>
</ul>
</form>
</body>
</html>