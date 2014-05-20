<?php

$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$physicists_array = explode(', ', $physicists_string);

$last_name = array_pop($physicists_array);  //remove last name

$physicists_string = implode(', ', $physicists_array) . ' and ' . $last_name;

// var_dump($physicists_string);

$famous_fake_physicists = $physicists_string;


echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.\n";