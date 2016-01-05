<!DOCTYPE html>
<html>
	<head>
		<title>String Handling</title>
		<link type="text/css" rel="stylesheet" href="style.css" />
	</head>
	<body>

		
		<h1>String Handling</h1>
		<p>A string is any series of characters enclosed in quotes. Either double " or single ' quotes are acceptable for defining a string.<p>
<pre><code>	$stringOne = "Hello";
	$stringTwo = 'World';
</code></pre>		
	<h2>String Concatenation</h2>
	<p>Concatenation is the adding of two or more strings together to make a single string. In PHP you must use the period . character to concatenate strings.</p>
<pre><code>	$stringThree = $stringOne . $stringTwo;</code></pre>	
	<p>Alternatively, you may use a short form .</p>
<pre><code>	$stringOne .= $stringTwo; //append $stringTwo to $stringOne</code></pre>	

	<h2>Escaping Strings</h2>
	<p>The escape character is used to nullify any special meaning the following character might have. For example, if a string contains quotes there is the potential for confusion regarding where a string begins and ends. Handle potential quoting conflicts by either:<p>
 <ul>
	<li>using alternate quoting stye inside the string (if string is double quoted, use single quotes inside, and vice-versa)<br />
	<pre><code>echo 'She said "Hello World!"';
echo "She said 'Hello World!'";</code></pre>	
	</li>
	<li>using the escape character backslash \ to negate the special meaning of the following character<br />
	<pre><code>echo "She said \"Hello World!\"";</code></pre>	
	</li>
 </ul>
	<h2>Strings containing variables</h2>
<p>If you want to include the value of a variable in the contents of a string, you can use one of the following methods:</p><pre><code>	//a variable is declared
	$myName = "Shania";

	/*
	------------------
	method #1: adding a variable value to a string
		 use the string concatenator '.'
		 use either single or double quotes for 
		 defining each part of the string
	------------------
	*/
	echo 'Hello, ' . $myName . ', how are you?';

	/*
	------------------
	method #2: adding a variable value to a string
		 use double quotes for the string, 
		 then add the variable within the string
		 this will NOT work using single quotes
	------------------
	 */
	echo "Hello, $myName, how are you?";</code></pre>	

<span>
<?php
echo "<p>Test string concatenation...</p>";
$stringOne = "Hello";
$stringTwo = 'World';
/* 
variable use within a string 
Option #1:
	use the concatenator to 
	connect strings as needed
*/ 

/* 
variable use within a string 
Option #2a:
	if the string is double quoted, 
	variable values will be accessed
*/ 


/* 
variable use within a string 
Option #2b:
	if the string is single quoted, 
	variable values will NOT accessed,
	so you'll need to use Option #1
*/ 

?>
</span>


<fieldset><legend>Exercise</legend>

<ul>
	<li>create and assign values to three variables for your first name, last name, and an appropriate prefix (Ms. Mrs. Mr. Dr. Etc)</li>
	<li>create another variable for storing your full name. this new variable's value should be created by using the values defined above, following this format:<br /> <code>Mrs. Shania Someperson</code></li>
	<li>display the result to the screen</li>
	<li>display the result as an HTML heading</li>
	<li>add inline style to change the heading font or color</li>
	<li>using the value of your full name variable in place of the example name below, output the following statement to the screen as an HTML paragraph:<br />
	<code>Mrs. Shania Someperson says "I'll be having lunch soon."</code>

</ul>

</fieldset>
	</body>
</html>








