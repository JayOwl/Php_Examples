<!DOCTYPE html>
<html>
	<head>
		<title>Php external files</title>
		<link rel="stylesheet" href="style.css" />	
	</head>
	<body>
		<h1>Php external files</h1>
        <p>PHP code can reside in various, physically separate files. There are four built in functions that can be used to bring together code across several files. All of them require a string parameter describing the path to the file that contains the code you wish to add.</p>
        <ol>
        <li><a href="http://php.net/manual/en/function.include.php">include()</a> adds the code if possible, if not possible, continue processing the PHP script</li>
        <li><a href="http://php.net/manual/en/function.include-once.php">include_once()</a> same as include(), but will ensure the file is not reloaded if it has been previously included</li>
        <li><a href="http://php.net/manual/en/function.require.php">require()</a> adds the code if possible, if not possible, terminate execution of the PHP script</li>
        <li><a href="http://php.net/manual/en/function.require-once.php">require_once()</a> same as require(), but will ensure file is not reloaded if it has previously been loaded</li>                    
        </ol>
<span>
<?php
	require_once("external_html.inc");
?>
</span>
        <p>If in doubt, choose <strong>require_once()</strong> as it is the most efficient, and the most strict.</p>
        <p>It is common to use external files for functions that will be used by several different scripts. It is also common to use external files for sections of code that perform certain tasks (eg: one external file containing code that ensures a user is correctly logged in).<p>
        <p>A file that is 'included' in a script, may itself 'include' other files, as long as all files have '.php' extensions.</p>
<span>

<?php 
	require_once("external_php.php");
	assessTheDayOfTheWeek();
?>        
  </span>
 
        
	</body>
</html>






