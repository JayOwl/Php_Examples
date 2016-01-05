<!DOCTYPE html>
<html>
	<head>
		<title>Php Functions</title>
		<link rel="stylesheet" href="style.css" type="text/css" />

	</head>
	<body>
		<h1>Php Functions</h1>
        <p>A <a href="http://php.net/manual/en/language.functions.php">function</a> is a block of reusable code. It always involves 2 things:</p>
        <ol>
        <li>function definition (the instructions to perform when the function is invoked)</li>
        <li>function invocation (executes the instructions in the function)</li>
        </ol>
        <p>Functions are also known as: Routines, Behaviours, Methods... in any case, it implies 'action', something is expected to take place if and when a function is run.</p>
		<p>PHP built in functions, such as <code>date()</code> have already been defined as a part of the PHP code library. The developer simply invokes the built in functions as needed.</p>
		<p>Developer defined functions require both the definition and invocation. Use comments to explain what your functions do, what parameters it requires, and what values it might return.</p>

		<h2>Functions</h2>
		<ul>
		<li>are blocks of reusable code</li>
		<li>are essential to all scripting</li>
		<li>capable of invoking other functions</li>
		<li>often require additional information (parameters) when being invoked</li>
		<li>often return values to the instruction that invokes them</li>
		</ul><pre><code>
/*
----------------------------------------
Step 1:	defining a function:
function	- this keyword is used to define a new function
doSomething	- the name of the function (developer chooses the name)
( )		- parameter list (optional, used to pass additional data)
{ }		- body of the function, contains one or more instructions
----------------------------------------
*/
	function doSomething( ){
		echo "This function has been invoked!";
	}
/*
----------------------------------------
Step 2:	invoking a function:
name the function, including the round brackets
----------------------------------------
*/
	doSomething();
		</code></pre>

		<h4>Writing a function</h4>
		<p>When you define a function, you must decide the following</p>
		<ol>
		<li>the name of the function (must be descriptive, suggestive of what the function does)</li>
		<li>does this function require any data to perform its work? if so, define parameters, one for each item of data</li>
		<li>will the invoking instruction require a response from the function when it finishes? if so, include return instruction(s)</li>
		</ol>
<span>
<?php
echo "<p>Write and then invoke a function...</p>";


?>
</span>
		<h4>Parameters</h4>
		<ul>
		<li>parameters are the mechanism for the invoking instruction to provide data to a function</li>
		<li>they are defined in a comma delimited parameter list round brackets following the function name($param01, $param02)</li>
		<li>when a function requires parameters, the invoking instruction must provide values</li>
		<li>the invoking instruction's provided values are automatically assigned to the parameter list variables upon invokation</li>
		<li>parameters may be any kind of data (integer, string, array, etc)</li>
		<li>if a function does not require parameters the parameter list remains empty functionName()</li>
		<li>inside the function parameter data should be validated before processing, to ensure it is ok to proceed with processing</li>
		</ul>
	<pre><code>
/*
----------------------------------------
Functions with parameters

$parameter01	- this is a new variable, that will exist 
				  only as long as the function is running	

				  it will contain whatever value is passed
				  by the invoking instruction

$parameter01, $parameter02, $parameter03...
				- any number of parameters may be defined
				  as a comma delimited list	
----------------------------------------
*/
	function doSomethingWithParameters( $parameter01 ){
		//this function can access values from $parameter01
	}

	function doSomethingWithMultipleParameters( $parameter01, $parameter02 ){
		//this function can access values from $parameter01 and $parameter02
	}
/*
----------------------------------------
Invoking functions with parameters:
name the function, including the parameter list
----------------------------------------
*/
	doSomethingWithParameters( "Shania" );
	doSomethingWithMultipleParameters( "Shania", "A00123456" );
		</code></pre>


<span>
<?php
echo "<p>Write and then invoke a function with parameters...</p>";


?>
</span>

		<h4>Returns</h4>
		<ul>
		<li>returns are the mechanism for the function to provide a response to the invoking instruction</li>
		<li>must use the <code>return $value;</code> instruction to return a $value</li>
		<li>the data returned may be any type (integer, string, array, etc)</li>
		<li>the return instruction terminates any further processing of the function</li>
		<li>a function may contain more than one return instruction</li>
		<li>if a function does not return an actual value, the return keyword can be omitted entirely, or used without a $value, eg <code>return;</code></li>
		</ul>
	<pre><code>
/*
----------------------------------------
Defining a function with a return
----------------------------------------
*/
	function doSomethingWithReturn( ){
		$sum = 42 + 100;
		return $sum;
	}
/*
----------------------------------------
Invoking a function with a return
	be sure to do something with the data a function returns
	usually by capturing the returned data in a variable
----------------------------------------
*/
	$resultOfFunction = doSomethingWithReturn();
		</code></pre>

<span>
<?php
echo "<p>Write and then invoke a function with parameters and a return...</p>";


?>
</span>
	<hr />
<span>               
<?php


?>
</span>
	</body>
</html>













