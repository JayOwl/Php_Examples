<!DOCTYPE html>
<html>
	<head>
		<title>Php scope</title>
		<link rel="stylesheet" href="style.css" type="text/css" />
	</head>
	<body>
		<h1>Php scope</h1>

        <p>Scope refers to the visibility of variables. PHP code can only refer to variables that are visible. A variable is considered 'declared' the first time it is assigned a value with the assignment operator. If the variable is declared outside of a functions, it is known as 'global', and is visible only to code outside the functions. If a variable is declared inside a function, it is visible only to code in that function.</p>
		<p>Functions are effectively 'sealed off' from code outside them. A function uses <code>parameters</code> and the <code>return</code> value to communicate with code external to it.</p>
        <p>The PHP keyword 'global' is one way to refer to a global variable inside a function, but this should be used with caution. See PHP source code on this page for examples</p>
        
		<p>Constants are not affected by scope. All constants must be declared outside of functions, and all constants have global visibility (constants are visible inside functions, unlike variables).</p><pre><code>const CONSTANTS_ARE_GLOBAL = "Im a constant!";
$variable = "Variables are local" ;

echo CONSTANTS_ARE_GLOBAL; //use constants anywhere
echo $variable;							//use variables only in the context they were declared

function someFunction(){
	echo CONSTANTS_ARE_GLOBAL; //no problem, constants are visible everywhere!
	// '$variable',  declared outside this function, is not visible here

	$functionVariable = "Function variable";
	// '$functionVariable' is only visible inside the function it was declared
}

</code></pre>
        <h2>Begin scope test...</h2>
        <span>
<?php
//all constants will be global
//in fact, PHP wont allow you to declare a constant inside a function
const ALL_CONSTANTS_ARE_GLOBAL = "Since a constant cant be changed, it has global visibility";
echo "<p>Accessing a constant at the global level: " . ALL_CONSTANTS_ARE_GLOBAL ."</p>";

//create and output a variable outside a function
$declaredGlobally = "This was declared globally!";
echo "<p>The \$declaredGlobally variable begins with value: <strong>".$declaredGlobally."</strong></p>";
//--------------------------------------------------------------------------------

/*
define a function
	what happens in the function is isolated 
	from the code outside the function, and vice-versa
	
*/
function someFunction(){

	echo "<p>Accessing a constant from inside a function: " . ALL_CONSTANTS_ARE_GLOBAL ."</p>";
	echo "<p>Try to access from inside a function a variable declared outside. This creates an error message. " . $declaredGlobally . "</p>";

	$declaredInsideAfunction = "We're in las vegas, baby!";
	echo "<p>A variable declared inside a function can be accessed inside that function: ". $declaredInsideAfunction."</p>";
}

someFunction();
echo "<p>A variable declared inside a function CANNOT be accessed outside that function: ". $declaredInsideAfunction."</p>";

//test the value of the global variable again
echo "<p>The \$declaredGlobally variable ends with value: <strong>".$declaredGlobally."</strong></p>";
//--------------------------------------------------------------------------------

?>        
		</span>
	</body>
</html>