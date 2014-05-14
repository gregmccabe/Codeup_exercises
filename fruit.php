<?php
// for loop
$fruits = array('apple', 'bannana', 'orange', 'grapes', 'lemon');
for ($i = 0; $i < count($fruits) ; $i++) {
	echo $fruits[$i] . PHP_EOL;
}

// for($i = 0; $i < count($fruits) ; $i++){
// 	echo $fruits[4]
// }

// foreach loop
$fruits = array('apple', 'bannana', 'orange', 'grapes', 'lemon');
foreach ($fruits as $key => $fruit) {
	echo "$key - $fruit\n";
}

$fruits = array(
    	array('name' => 'apple', 'color' => 'red'),
    	array('name' => 'bananna', 'color' => 'yellow'),
    	array('name' => 'orange', 'color' => 'orange'),
    	array('name' => 'grapes', 'color' => 'purple'),
    	array('name' => 'lime', 'color' => 'green'),
    );

foreach ($fruits as $fruit) {
	echo $fruit['name'] . " is " . $fruit['color'] . PHP_EOL;
}

 
        
    
    
?>