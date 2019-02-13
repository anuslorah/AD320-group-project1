<?php

require('mockDatabase.php');

//clean strings user has enteres
function cleanString($string) {
	//remove HTML & script tags
	$string = strip_tags($string); 	
	//allow alphanumerics & punctuation - convert the rest to single spaces
	$string = preg_replace("/[^[:alnum:][:punct:]]/", " " ,$string);  
	return $string;
}

$name = cleanString($_GET['name']); 
$city = cleanString($_GET['city']);
$zip = cleanString($_GET['zip']);
//		

if($name != NULL) {
	$queryString = $name;
} else if ($city != NULL) {
	$queryString = $city;
} else if ($zip != NULL) {
	$queryString = $zip;
} else {
	echo "You forgot to enter a value. Pleae try again";
}

function showData($db, $string) {
	foreach ($queryArray as $dataRow) {
    	$barName = $dataRow['$name'];
		$streetAddress = $dataRow["street"];
		$streetAddress = $dataRow["city"];
		$streetAddress = $dataRow["zip"];
		$streetAddress = $dataRow["phone"];
		$streetAddress = $dataRow["hh"];
		$streetAddress = $dataRow["awesome"];
		
		echo "<div class='contactRow' " .     //Notice this is one long string.
        "style='border: 1px solid black; ". //String concatenation ignores whitespace
        "padding-left: 10px; margin: 5px;" .
        "width: 30%;float: left;' ".
        ">";
		
		echo "<h3>Name: $name</h3>"; //Since we are outputting to the browser,
      	echo "<p>Phone Number: $phoneNumber</p>"; //when we echo valid HTML tags,
		echo "</div>"; //they render on the page.
	}

showData($mockDBQueryCity, $queryString);
	
?>