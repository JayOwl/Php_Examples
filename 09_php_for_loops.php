<!DOCTYPE html>
<html>
	<head>
		<title>Php For Loops</title>
		<link type="text/css" rel="stylesheet" href="style.css" />
		<style>

		</style>
	</head>
	<body>
		<h1>Php For Loops</h1>
		<p>The <a href="http://php.net/manual/en/control-structures.for.php">for control structure</a> is a common way to create looping code (code blocks whose execution repeats more than once)</p>
		<h2>For Loops:</h2>
		<ul>
		<li>allow for repeating the execution of code</li>
		<li>are supported by all scripting languages</li>
		<li>use round brackets ( ) to define how many times code will be executed</li>
		<li>use curly braces { } to describe the block of code to be repeated (the body of the <code>for</code> loop)</li>
		<li>code inside the <code>for</code> loop body may include additional <code>for</code> loops</li>
		<li>a <code>for</code> loop can be terminated before completing with the <code>break;</code> instruction </li>
		<li>the <code>for</code> loop code block can skip remaining code and jump to the start of the next loop cycle with <code>continue;</code></li>
		</ul>

<h2>The pattern for defining a for loop:</h2><pre><code>
	for( start_condition; end_condition; increment/decrement ) {
		codeToExecuteEachLoop;
	}
</code></pre>
<ol>
	<li><code>start_condition;</code> defines how to begin the loop</li>
	<li><code>end_condition;</code>	 is a boolean statement meaning 'keep looping as long as this is true'<br />this condition is checked before code in the body is executed</li>
	<li><code>increment/decrement;</code> moves the value of the start_condition towards the end_condition.<br />this code is run each time the code in the body has completed execution</li>
	<li><code>codeToExecuteEachLoop</code>	enclosed in curly braces, the 'body' of the loop.<br />one or more instructions to be repeated are defined here</li>
</ol>
</p>
		<h4>Code Example</h4>
		<pre><code>	for( $index = 0; $index < 10; $index++){
		echo $index . "&lt;br />";
	}
			</code></pre>
<span>
<?php
/*
some example for loops...
1: counting up by ones
*/

/*
2: counting down by ones
*/

/*
using 'continue' to skip an interation
but not stop the loop
*/

/*
using 'break' to skip an interation
and terminate the loop
*/

/*
you can use the value of the index
as part of a path or filename...

in this case the images are all named with 
ascending numbers, eg:
	pic0.jpg, pic1.jpg, pic2.jpg etc
*/

?>
</span>   
<h2>Loop Controls:</h2>

<p>Loops can be short-circuited while iterating using PHP loop control instructions:</p>
<ul>
	<li><a href="http://www.php.net/manual/en/control-structures.break.php">break;</a> ends execution of the current loop</li>
	<li><a href="http://www.php.net/manual/en/control-structures.continue.php">continue;</a> skip the rest of the current loop iteration and continue execution at the condition evaluation and then the beginning of the next iteration</li>

</ul>


		<fieldset><legend>Exercise</legend>
		<h3>Main Challenge:</h3>
		<ul>
			<li>Use a <code>for</code> loop to ouput all the numbers from 1000 to 0</li>	
			<li>output each value as a list item in an HTML unordered list</li>	
			<li>do NOT output the number 13 (use <code>continue</code>)</li>	
		</ul>
		<h3>Secondary Challenges:</h3>
		<ul>
			<li>change the countdown to count down by 2s instead of 1s</li>	
		</ul>
		</fieldset>

	</body>
</html>









