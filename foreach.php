<?php
	
	$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
	
foreach($things as $thing){
	if (is_scalar($thing)) {
		echo "{$thing} is a scalar\n";
	}

}


	// if (is_array($thing)) {
// 		echo "{$thing} is an array\n";
// 	}
// 	elseif (is_bool($thing)) {
// 		echo "{$thing} is a boolean\n";
// 	}
// 	elseif (is_float($thing)) {
// 		echo "{$thing} is a float\n";
// 	}
// 	elseif (is_int($thing)) {
// 		echo "{$thing} is an interger\n";
// 	}
// 	elseif (is_null($thing)) {
// 		echo "{$thing} is NULL\n";
// 	} else {
// 		 echo "{$ting} is a string\n";
// 	}

?>