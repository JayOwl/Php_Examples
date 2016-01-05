<?php
echo "<h2>Including External PHP</h2>";
echo "<p>External PHP may be included into any PHP script.
		Just make sure the external file has a <code>.php</code> extension</p>";
echo "<p>Often used to store function definitions</p>";

function assessTheDayOfTheWeek(){
	if( (date("D") == "Sat") || (date("D") == "Sun")){
		echo "Its the weekend! Sweetness...";		
	}else{
		echo "Get to work! Sigh...";		
	}	
}
?>