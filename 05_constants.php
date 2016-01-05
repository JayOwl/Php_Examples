<!DOCTYPE html>
<html>
	<head>
		<title>Constants</title>
		<link type="text/css" rel="stylesheet" href="style.css" />
		
	</head>
	<body>
		<h1>Constants</h1>
<p>A constant is a container that holds data, but unlike variables, a constant's value cannot vary. They are declared and used differently than a normal variable. The value of a CONSTANT is usually assigned by the developer themselves, either near the top of the script or in an external document. It is useful for defining values that do not change (the location of a database, the name of a default style sheet, etc)</p> <p>Note the standard of using UPPER_CASE for naming constants. Also note the absence of the <code>$</code> character, which is only used with variables.<pre><code>//declare a constant using the 'const' keyword
const MINIMUM_VALUE_OF_INTERNET = 0.0;

//use a constant
echo MINIMUM_VALUE_OF_INTERNET;
	</code></pre>	
	</p>		
	
	<span>
	
	

<fieldset><legend>Exercise</legend>

<ul>
	<li>create a constant for storing the minimum age for voting in Canada (18)</li>
	<li>use the value of the contant to output the following:<br /> <code>You must be at least 18 years of age to vote as a Canadian citizen.</code></li>
	<li>what happens if you try to change (reassign) the value of the constant?</li>
</ul>

</fieldset>
	</body>
	
</html>








