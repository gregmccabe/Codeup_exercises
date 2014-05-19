<?php

// first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function array_has_value($needle, $haystack) {

	$results = array_search($needle, $haystack);
	if ($results === FALSE) {
		return FALSE;
	} else {
		return TRUE;
	}		

}

// var_dump(array_has_value('Bob', $names));

function array_common_count($array1, $array2) {
	
	$count = 0;
	
	foreach($array1 as $value) { 
		if(array_has_value($value, $array2)) {
			$count++;
		}
	}
	return $count;

}

var_dump(array_common_count($names, $compare));
?>