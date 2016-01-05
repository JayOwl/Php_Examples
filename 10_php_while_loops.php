<!DOCTYPE html>
<html>
	<head>
		<title>Php While Loops</title>
		<link type="text/css" rel="stylesheet" href="style.css" />
	</head>
	<body>
		<h1>Php While Loops</h1>
		<p>The <a href="http://php.net/manual/en/control-structures.while.php">while loop</a> is a simple looping mechanism that can often be used instead of the for loop</p>
		<h2>While Loops:</h2>
		<ul>
		<li>allow for repeating the execution of code</li>
		<li>are supported by all scripting languages</li>
		<li>use round brackets ( ) to define a boolean condition (keep looping as long as this is true)</li>
		<li>use curly braces { } to describe the block of code to be repeated (the body of the for loop)</li>
		<li>a while loop can be terminated before completing with the <code>break;</code> instruction </li>
		<li>the while loop code block can skip remaining code and jump to the start of the next loop cycle with <code>continue;</code></li>
		<li>can usually be used instead of for loops</li>

		</ul>

<h2>The pattern for defining a while loop:</h2><pre><code>	while(boolean_condition){
		codeToExecuteEachLoop;
		escapeCondition;
	}</code></pre>
<ol>
	<li><code>boolean_condition;</code>	 is a boolean statement meaning 'keep looping as long as this is true'<br />this condition is checked before code in the body is executed</li>
	<li><code>codeToExecuteEachLoop</code>	enclosed in curly braces, the 'body' of the loop.<br />one or more instructions to be repeated are defined here</li>
	<li><code>escapeCondition;</code> in the body something must eventually change <code>boolean_condition</code> to false </li>
</ol>
	<h4>Code Example</h4>
	<pre><code>	$counter = 0;
	while($counter < 10){
		echo "Counter is: " . $counter;
		$counter++;
	}
		</code></pre>
<h2>Loop Controls:</h2>

<p>Loops can be short-circuited while iterating using PHP loop control instructions:</p>
<ul>
	<li><a href="http://www.php.net/manual/en/control-structures.break.php">break;</a> ends execution of the current loop</li>
	<li><a href="http://www.php.net/manual/en/control-structures.continue.php">continue;</a> skip the rest of the current loop iteration and begin the next iteration</li>

</ul>
	<hr />
		<fieldset><legend>Exercise</legend>
		<p>You may team up with a classmate for this exercise or complete it on your own.</p>
		<p>Use <code>while</code> loops and <code>if</code> statements to count from a given positive or negative number up or down to zero.</p>
		<ul>
			<li>if the given number is positive, output a count down from that number to zero. </li>	
			<li>if the given number is negative, output a count from that number up to zero</li>	
			<li>if the given number is zero, output the message "No counting required"</li>	
		</ul>
		<p>Bonus Challenge: Re-do this exercise using <code>for</code> loops instead of <code>while</code> loops.</p>

		</fieldset>
<span>
<?php
/*
variable $givenNumber
---------------------
use this value to determine how
to do the count (count up or down)

change the value of this variable
to test your script with different numbers

assign whole numbers only, positive or negative, 
*/
$givenNumber = -12;


?>
</span>
	</body>
</html>