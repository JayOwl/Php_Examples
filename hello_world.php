Hello World Page.

<?php
echo "<h1>Hello World<h1>";

/* 
lines 2 and 4: a PHP Declaration, containg
lines 3 and 5: comment
*/
	echo "<h2>Test variable.... <h2>";
	/*
	declare and assign a variable with value
		$myName - varable name
		=		- assginment operator
		"Shania" - assign the string	
	*/
	$myName = "Shania";
	$myAge = 34;
	$myNumber = "A00838629";
	$stringOne = "asdfasdf";
	$stringTwo = "Bobby";
	
	$firstName = "Flay";
	$lastName = "Sharon";
	$prefix = 'ariel';
	echo $myName;	
	echo $myAge;	
	echo $myNumber;		
	const MINIMUM_VALUE_OF_INTERNET = 0.1;
	const PI = 3.13;
	echo MINIMUM_VALUE_OF_INTERNET;
	
	echo "<p>" . $stringOne . "" . $stringTwo . "</p>";

	echo "<p> $stringOne $stringTwo! </p>";
	
	echo "<p> Hello $prefix $firstName $lastName!</p>";
	//echo "<p> ". $firstName . "" . $lastName . "" . $prefix "! </p>";
	
	echo "<p style='color:yellow;'> Hello $prefix $firstName $lastName. </p>";
	echo "<p> Terminator says \"I'm your daddy\".</p>";
	echo '<p> Terminator says "Back from the future".</p>';
	echo "<p>PI: " . PI . "</p>";
	
	$value01 = 324;
	$value02 = 431;
	$diameterOfCircleInCent = 30;
	//radius = $diameterOfCircleInCent/2;
	$areaOfCircle = PI * ($diameterOfCircleInCent/2) * ($diameterOfCircleInCent/2);
	echo "<p> $areaOfCircle</p>";
	
	
	
	$sum = $value01 + $value02;
	$sum1 = ($value01 + $value02) + 3652;
	
	echo "<p> Sum is: $sum</p>";	
	
	$aValue = $aValue - 1;
	echo "<p> $aValue  </p>";
	
	const Hours = 30;
	const overtimepay = 1.5;
	
	$hourlyRate = 29;
	$hoursWorked = 42;
	
	$sum01 = (($hourlyRate * overtimepay) * 2);
	$sum02 = $hourlyRate * $hoursWorked;
	$sum03 = $sum02 + $sum01;
	echo "<p> $sum03 </p>";
	
	
	$userAge = 42;
	if($userAge >= 19){
		echo "your an adult";		
	}
	
	
	const VALID_USER = "Shania";
	const VALID_PASSWORD = "bcit";
	
	$userInputName = "Jeff";
	$userInputPassword = "secret";
	$userNameWasValid = "";

	if( $userInputName == VALID_USER ){
		$userNameWasValid = true;
		echo "<p> UserName is ok</p>";
		if($userInputPassword == VALID_PASSWORD){
			echo "<p> Password is ok</p>";				
	}else{
		echo "<p>userName is invalid</p>";		
	}
	}else{
		echo "<p>user name is valid</p>";		
	}
	
	for($index = 0; $index < 10; $index++ ){
		echo "$index";		
	}

	for( $counter = 0; $counter > - 120; $counter--){
		echo " $counter";
	}
	
	///loop continue	
	for($index = 0; $index < 20; $index++ ){
		if ($index == 13){
			break;			
		}		
		echo "$index";
	}
	////loop break
	echo "<ul>";
	for($index = 20; $index >= 0; $index -= 2 ){
		if ($index == 13 ){
			continue;			
		}		
		echo "<li>$index</li>";		
	}
	echo "</ul>";	
	for($imageNumber = 1; $imageNumber <= 4; $imageNumber++){
		echo "<img src='./images/pic$imageNumber.jpg'>";
		
		/*
		<img src ="./image />"
		*/		
	}	
	$index1 = 10;
	while ( $index1 > 20 ){
		echo "$index1";
		$index++;		
	}
	
	/*
	$givenNumber = 12;
	if($givenNumber == 0){
		echo "<p>Nothing to count on here</p>";		
	}else if{$givenNumber >0}{
		echo "<p>count from ".$givenNumber." </p>";
		
	}
	if($givenNumber > 0){
		echo "<p> Count Down</p>";
		while ($givenNumber >= 0){
			echo "<p>$givenNumber</p>";
			$givenNumber--;			
		}		
	}else{
		echo "<p>CountUP</p>";
		while($givenNumber <= 0){
			echo "<p>$givenNumber</p>";
			$givenNumber++;			
		}
	}	
	*/
	doSomething();
	function doSomething(){
		echo "This function has been invoked";		
}

	function doSomething2(){
		echo "This function has been invoked";		
}

function addNumbers ($number01, $number02){
	$sum = $number01 + $number02;
	echo "<p> Sum is: $sum</p>";	
}

addNumbers(56, 325);


echo"<p>Write and then invoke a function</p>";

function addNumbersWithReturn($number01, $number02){
	$sum = $number01 + $number02;
	return $sum;	
}
$result = addNumbersWithReturn(4, 234);
echo "<h1>$result</h1>";
echo "<h1>" . addNumbersWithReturn(4, 234)."</h1>";

if(	isset($myName) == true) {
	echo "<p> Variable does exist</p>";
	echo $myName;
	}else{
		echo "<p> Variable does NOT exist</p>";
	}
	
if(	empty($myName) == true) {
	echo "<p> Variable does exist</p>";
	echo $myName;
	}else{
		echo "<p> Variable does NOT exist</p>";
	}
	
echo"<h1>Date:</h1>";

echo date("l, F j");
$today = date("l, F, j");
echo "<h1>$today<h1>";
if(date("Y") > 2016){
	echo "<p> Its the new millenium!!</p>";
}
///date time
ini_set('date.timezone', 'America/Vancouver');
print 'America/Vancouver<br>';
print 'server timezone<br>';
$time1 = date('H:i:s', time() - date('Z')); // 12:50:29
$time2 = date('H:i:s', gmdate('U')); // 13:50:29
print $time1.'<br>';
print $time2.'<br>';
/*
function someFunction(){
	echo "".ALL_CONSTANTS_ARE_GLOBAL . "";
	echo "". $declaredGlobally . "".;
	
	$declaredIn
	
}


$variable_external_file = "Shania";
*/


/*

function assessTheDayOfTheWeek(){
	if ( (date("D")== "Sat") || (date("S")==Sat))
	
}

assesstheDaysofTheWeek();
echo $varia



*/


?>