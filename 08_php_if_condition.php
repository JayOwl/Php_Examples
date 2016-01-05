<!DOCTYPE html>
<html>
	<head>
		<title>If Control Structure</title>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<h1>Control Structure: If</h1>
		<p>The <a href="http://php.net/manual/en/control-structures.if.php"><code>if</code> control structure</a> allows for decision making in your code. It will ask a question in boolean form (a question that can be answered as either 'true' or 'false') and will use the answer to determine what action, if any, it will take.</p>
		<h2>If Statements:</h2>
		<ul>
		<li>allow for conditional execution of code</li>
		<li>are supported by all scripting languages</li>
		<li>use round brackets ( ) to define boolean conditions that determine what code is executed (the condition)</li>
		<li>use curly braces { } to describe blocks of code (the body of the if statement)</li>
		<li>may contain additional <code>if</code> statements inside the body (nested)</li>
		</ul>
		<h4>If Statement Pattern</h4>
		<p>If statements ask a question that can be answered with <code>true</code> or <code>false</code>, known as a boolean condition. If the statement is <code>true</code>, the instructions associated with the if statement will run, if the statement is <code>false</code>, they will not run</p>
		<pre><code>	if(true or false){
		//execute instructions (but only if true)
	}
		</code></pre>

		<h4>Code Example</h4>
		<pre><code>
	/*
	only execute the echo statement if the value of
	$userAge variable is greater than or equal to 18
	*/
	if($userAge >= 19){
		echo "You are an adult.";
	}
		</code></pre>
<p>The body of an <code>if</code> statement may contain other <code>if</code> statement(s). This is called nesting</p>
		<pre><code>
	/*
	only execute the echo statement if the value of
	$userAge variable is greater than or equal to 19
	*/
	if($userAge >= 19){
		echo "You are an adult.";
		//this nested if statement will only 
		//be reached for users 19 or over
		if($userAge >=65){
			echo "You qualify for the seniors discount!";
		}
	}
		</code></pre>
<fieldset><legend>Exercise</legend>
<p>Write a script that imitates a typical user login scenario</p>
<ul>
	<li>create variables for storing the values of a 'valid' user, eg: username: shania, password: bcit</li>
	<li>create two more variables for storing a test user name and a test password. assign values to each. as you test your script, change the values of these test variables so that sometimes they match the 'valid' user credentials you created earlier, and sometimes they dont match</li>
	<li>create the NESTED if statements to determine if we can log a certain user in</li>
	<li>display to the screen "Login successful!" if the login is ok</li>
	<li>display nothing if the login failed</li>

</ul>
<span>
<?php
//declare constants defining the valid user information 
const VALID_USER			= "Shania";
const VALID_PASSWORD = "bcit";
?>
</span>
</fieldset>

	<hr />

		<h2>If/else Statements:</h2>
		<p>An if statement may optionally conclude with an else clause, providing the developer with a mechanism for choosing which of two blocks of code will be run.</p>
		<pre><code>
	if($userAge >= 19){

		//run this code if the user is 19 or over
		echo "You are an adult.";

	}else{

		//run this code if the user is under 19
		echo "You are not an adult yet.";

	}
		</code></pre>

<fieldset><legend>Exercise</legend>
<p>Uupdate your script from the exercise above</p>
<ul>

	<li>add an <code>else</code> clause that will display "Sorry, could not log you in." if the login attempt fails</li>
	<li>for an optional additional challenge, if a login fails, give the user a more detailed description of why, eg: "Sorry, wrong password", or "Sorry, that username does not exist"</li>

</ul>
</fieldset>

		<h1>Control Structure: If Else If</h1>
		<p>The <a href="http://php.net/manual/en/control-structures.if.php"><code>if</code> control structure</a> allows for chained decision making by including any number of 'else if' clauses after the initial if statement. Note that when any if statement in the chain resolves to true, all subsequent if statements are ignored.</p>
		<pre><code>
	if($userAge > 18){
		echo "You are an adult";
	}else if($userAge == 18){
		echo "You recently became an adult!";	
	}else if($userAge == 17){
		echo "You will soon be an adult.";
	}else{
		echo "You are not an adult.";
	}
		</code></pre>
<h2>Every If Statement Includes:</h2>
<ul>
	<li>Exactly one <code>if</code> followed by</li>
	<li>from zero to an infinite number of <code>else if</code> followed by</li>
	<li>from zero to one <code>else</code> </li>
</ul>

		
    </body>
</html>