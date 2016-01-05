<!DOCTYPE html>
<html>
	<head>
		<title>Php Operators</title>
		<link type="text/css" rel="stylesheet" href="style.css" />

	</head>
	<body>

		<h1>Php Operators</h1>
        <p>Operators perform actions, such as mathematical calculations or evaluations on the data they are associated with.</p>
	<ul>
	<li><strong>=</strong> Assignment Operator (Assigns the value on the right side to the variable on the left.)</li>
	<li><strong>.</strong> Concatenation operator (For adding strings together)</li>
	</ul>
	<h2>Math Operators</h2>
	<ul>
		<li><strong>+</strong> Addition</li>
		<li><strong>-</strong> Subtraction</li>
		<li><strong>*</strong> Multiplication</li>
		<li><strong>/</strong> Division</li>
		<li><strong>%</strong> Modulus. Determines the remainder, if any, after division.</li>
	</ul>
	<h2>Logical Operators</h2>
	<p>Used in conjunction with control structures such as 'if', 'for', 'while' etc</p>
<ul>
		<li><strong>==</strong> Equivalence. Test to see if value on the right is eqivalent to the value on the left.</li>
		<li><strong>>, &lt;, >=, &lt;=</strong> Greater-than, Less-than, Greater-than or Equal-to, Less-than or Equal-to</li>
		<li><strong>!</strong> Logical not. Negates/reverses the value on the right. Eg if $value == true, then !$value == false. </li>
		<li><strong>!=</strong> Non-equivalence. Test to see if value on the right is not eqivalent to the value on the left</li>
	</ul>
	<h2>Short Form Operators</h2>
	<p>There are several short-form syntax options designed to make it easier to perform common operations</p>
	<h3>Incrementing, Decrementing Operators</h3>
	    <p>Adding or removing a value of '1' from a variable is a very common operation. Most scripting and programming permits shortcuts for performing this task.</p><pre><code>
	//Add 1 to the value of a variable
	$someVar = $someVar + 1;	//longform
	$someVar++ ;			//shortform

	//Subtract 1 from the value of a variable
	$someVar = $somevar - 1;	//longform
	$someVar--;			//shortform</code></pre>

	<h3>Accumulate or Decrease Operators</h3>
			<p>Adding or removing an arbitrary numeric value from a variable is a very common operation. Most scripting and programming permits shortcuts for performing this task.</p><pre><code>
	//Add an arbitrary value to the value of a variable
	$someVar = $someVar + 42;	//longform
	$someVar += 42;			//shortform

	//Subtract an arbitrary value to the value of a variable
	$someVar = $someVar - 42;	//longform
	$someVar -= 42;			//shortform</code></pre>

<fieldset><legend>Exercise</legend>

<ul>
	<li>create a constant for storing the value of PI (3.14)</li>
	<li>create another variable for storing the value of a circle's diameter in centimeters</li>
	<li>use PHP operators to calculate the area of a circle based on it's radius (radius is half of diameter, area is PI multiplied by the radius squared)</li>
	<li>store the results of the calculation in a variable</li>
	<li>display the result to the screen using HTML formatting</li>
</ul>

</fieldset>

<br />

<fieldset><legend>Exercise</legend>
<p>Use PHP variables and constants to calculate and display Jill's gross income based on the following details:</p>
<ul>
	<li>Jill worked 42 hours last week.</li>
	<li>She gets $29/hr for a 40 hour work week</li>
	<li>She gets time and a half for any overtime</li>
	<li>store the results of the calculation in a variable</li>
	<li>display the result to the screen using HTML formatting</li>
</ul>

</fieldset>

     </body>
</html>