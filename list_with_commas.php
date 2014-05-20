<?php

$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$physicists_array = explode(', ', $physicists_string);

$last_name = array_pop($physicists_array);

var_dump($physicists_array);

// $famous_fake_physicists


// echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.";