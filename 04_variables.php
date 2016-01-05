<!DOCTYPE html>
<html>
	<head>
		<title>Variables</title>
		<link type="text/css" rel="stylesheet" href="style.css" />
		
	</head>
	<body>
		<h1>Variables</h1>
<p>A variable is a container that holds data. Every variable is given a name, defined by the developer. Data can be assigned or accessed by using the name of the variable. The data value of a variable typically comes from a dynamic source, such as a database, or an HTML form submission. Data can be of many kinds, or types.</p>
<h2>Types of data</h2>
<ul>
<li><code>string</code> any series of characters enclosed in quotes, eg: <code>"abc"</code> <code>'abc'</code> <code>"123"</code> <code>"true"</code></li>
<li><code>integer</code> any whole number, positive or negative, eg: <code>42</code> &nbsp; <code>-321</code></li>
<li><code>float/double</code> any decimal number, positive or negative, eg: <code>1.30</code> &nbsp;<code>-0.005</code>  &nbsp; <code>20999.00</code></li>
<li><code>boolean</code> can be either true or false, eg: <code>true</code> <code>false</code></li>
</ul>
<h2>Variable Handling</h2>

	<p>All standard variables must be created (declared), assigned a value, then read (referenced) using the <code>$</code> prefix.</p><pre><code>	//declare a variable and assign a value
	$someVariableName = "value";

	//reference a variable
	echo $someVariableName;
	</code></pre>The value of a variable may change. Reassigning a new value to a variable will overwrite the previous value.	
<pre><code>	//this variable used to contain the string 'value'
	//now its being reassigned the value 'newValue'
	$someVariableName = "newValue";

	//variable values can vary, hence the name
	echo $someVariableName;
	</code></pre> The data type of a variable may change. PHP is considered a 'typeless' language. NOTE: This is generally a poor coding practice, and should be avoided.	
<pre><code>	//this variable's data used to be a string
	//but now is being assigned an integer
	$someVariableName = 42;	

	//php wont care, its typeless
	echo $someVariableName;
	</code></pre>  
	

	<h2>Rules for Variable Names</h2>
	<ul>
		<li>must be descriptive</li>
		<li>may not include spaces</li>
		<li>cannot start with a number</li>
		<li>may use alphanumerics and underscores or dashes</li>
		<li>must be case sensitive</li>
	</ul>
	
	
	
	
	</span>
<fieldset><legend>Exercise</legend>

<ul>
	<li>create three variables for storing your name, age and student number respectively</li>
	<li>assign appropriate values to each variable</li>
	<li>use PHP to echo out each variable's information</li>
	</li>
</ul>

</fieldset>
<fieldset><legend>Bonus Exercise</legend>

<ul>
	<li>define CSS rules for two different background colors, eg <code>.highlight{ background-color:yellow; } .lowlight{ background-color:#ababab;  }</code></li>
	<li>define a PHP variable that stores the name of one of the above CSS styles</li>
	<li>us the variable value to assign one of the styles to a heading in this page.</li>
	</li>
</ul>

</fieldset>
	</body>
	
</html>










