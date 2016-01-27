<?php

// Code taken from stackoverflow.com under 'CC BY-SA 3.0' 

function reverse_string_by_word($string)
{
	$reversed = "";
	
	// stores the intermediate string for every reversed word
	$temp = ""; 

	for($i = 0; $i < strlen($string); $i++) 
	{
		if(! ctype_alpha($string[$i])) // checking if current character is alphabetic
		{
			$reversed = $reversed . $temp . $string[$i];
			$temp = "";
			continue;
		}

		// if alphabet, prepend the character to the intermediate reversed string 
		$temp = $string[$i] . $temp;   
	}
	
	// appending the reversed word to the final result
	$reversed = $reversed . $temp; 

	return $reversed;
}

echo reverse_string_by_word($_POST['string']);

?>