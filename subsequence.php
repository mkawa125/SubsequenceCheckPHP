<?php

/* 
Given two strings string1 and string2, find if string1 is a subsequence of string2. 
A subsequence is a sequence that can be derived from another sequence by deleting some elements without changing the order of the remaining elements. 
Expected time complexity is linear. 
*/

// Iterative PHP program to check if a string is subsequence of another string

// Returns true if string1[] is a subsequence of string2[].
// lenthOfString1 is length of string1 and lenthOfString2 is length of string2

function isSubSequence($string1, $string2, $lenthOfString1, $lenthOfString2)
{
	// For index of string1
	$j = 0;
	
	/* Traverse string2 and string1,
	and compare current
	character of string2 with
	first unmatched char of
	string1, if matched then
    move ahead in string1
    */
	for($i = 0; $i < $lenthOfString2 and $j < $lenthOfString1; $i++){
        if ($string1[$j] == $string2[$i]){
            $j++;
        }
    }
	// If all characters of string1 were found in string2
	return ($j == $lenthOfString1);
}

    /*
    Defining variables
    */

	$string1 = "Papaa";
	$string2 = "DahabuPapaaMkawa";
	$lenthOfString1 = strlen($string1);
	$lenthOfString2 = strlen($string2);
	
	if(isSubSequence($string1, $string2, $lenthOfString1, $lenthOfString2))
		echo "Yes ";
	else
		echo "No";

?>