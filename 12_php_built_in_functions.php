<!DOCTYPE html>
<html>
	<head>
		<title>Built In Functions</title>
		<link type="text/css" rel="stylesheet" href="style.css" />
	</head>
	<body>
		<h1>Built In Functions</h1>
<p>A function performs some useful task for the developer, such as connecting to a database or reading/writing files. <a href="http://php.net">PHP.net</a> provides documentation on the hundreds of useful built in functions available.</p>
<p>To use a function, name it and provide it the data it needs inside the parameter list defined by round brackets ( ). Most functions, when complete, will return data to the instruction that invoked it. This returned data can be captured in a variable for later use.</p><pre><code>
$resultOfFunction = functionName("parameter");
</code></pre>

<h2>isset( )</h2>
<p><a href="http://php.net/manual/en/function.isset.php">isset( )</a> provides a way to determine if a variable exists or not. Trying to use a variable that does not exist will result in an error, and since many variables arrive at a script from external sources, they cannot be trusted. <a href="http://php.net/manual/en/function.isset.php">isset( )</a> will ensure it is ok to use a variable in your script.</p>	

<h2>date( )</h2>
<p>If the server date/time is set correctly, the <a href="http://php.net/manual/en/function.date.php">date( )</a> function can be used to determine date/time information.</p>
<p>IMPORTANT: Set the correct timezone for your PHP installation by changing the configuration file. Use the wamp 'W' icon to open PHP > <code>php.ini</code>. Find the 'date.timezone' declaration and make the following changes - <br /><code><strong>date.timezone = America/Los_Angeles</strong></code><br />Save these changes and use the 'W' icon to restart all services.</p>
<p>Investigate the <a href="http://php.net/manual/en/function.date.php">date( )</a> function to see what parameters are possible, and see example code usage.</p>		
<span>
<?php



?>
</span>
<br />
<fieldset><legend>Exercise</legend>

<ul>
	<li>use the date function to display the current time following this format: <code>00:00:00am</code> (HH:MM:SS)</li>
	<li>create and assign values to test variables for storing your birth date information</li>
	<li>use the date function and if statement(s) to determine if today is your birthday or not. if it is, output "Happy Birthday!", if it's not, output "Just another day."</li>
	<li>try changing the value of the test birthdate variable so that does/doest match today to help test your script</li>
	
</ul>
</fieldset>
	</body>
</html>