<?php

$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"
function set_or_empty($variable_name) {
	if (isset($variable_name)) {
		echo "$variable_name is set\n";
	} elseif (empty($variable_name)) {
		echo "empty\n";
	}	
}

set_or_empty($nothing);
$serialize_array = serialize($array);
	echo $serialize_array . PHP_EOL;

$unserialize_array = unserialize($serialize_array);
	print_r($unserialize_array) . PHP_EOL;

// TEST: If var $nothing is set, display '$nothing is SET'

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'

// Serialize the array $array, and output the results

// Unserialize the array $array, and output the results