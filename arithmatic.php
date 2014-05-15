

<?php

function add($a, $b) 
{
    echo $a + $b . PHP_EOL;
}
add(10,10);

function subtract($a, $b) 
{
    echo $a - $b . PHP_EOL;
}
 subtract(79, 42);

function multiply($a, $b) 
{
    echo $a * $b . PHP_EOL;
}
multiply(30,3);

function divide($a, $b) 
{
    echo $a / $b . PHP_EOL;
}
divide(36, 6);

function modulus($a, $b)
{
	echo $a % $b . PHP_EOL;
}
modulus(23,2);




function compare($a, $b, $strict)
{
	if ($strict === true) {
		echo $a === $b ? 'true' : 'false';
	} else {
		echo $a == $b ? 'true' : 'false';
	}
	echo PHP_EOL;
}
compare(42,'42', false);
?>







