<?php

$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark'; //strin
// $physicists_array = explode(', ', $physicists_string); //makes string to array

// $last_name = array_pop($physicists_array);  //remove last name

// $physicists_string = implode(', ', $physicists_array) . ' and ' . $last_name; //truns array to string with concatination

// // var_dump($physicists_string);



function humanized_list($physicists_string, $alphaSort = false) {

	$physicists_array = explode(', ', $physicists_string);


	if ($alphaSort === true) {
		sort($physicists_array);
	}

	$last_name = array_pop($physicists_array);
	$physicists_string = implode(', ', $physicists_array) . ' and ' . $last_name;

	return $physicists_string;
}

$famous_fake_physicists = humanized_list($physicists_string, true);


echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.\n";
