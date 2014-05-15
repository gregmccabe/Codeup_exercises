<?php

function add($a, $b) 
{
	if (is_numeric($a) && is_numeric($b)) 
	{
		return $a + $b . PHP_EOL;
	} else {
		error();
	}
}
echo add(10,10);

function subtract($a, $b) 
{
	if (is_numeric($a) && is_numeric($b))
	{
		return $a - $b . PHP_EOL;
	} else {
		error();
	}
}
echo subtract(75,42);


function multiply($a, $b) 
{
	if (is_numeric($a) && is_numeric($b)) {
		return $a * $b . PHP_EOL;
	} else {
		error();
	}
}
echo multiply(30,3);

function divide($a, $b) 
{
	if (is_numeric($a) && is_numeric($b)) {
		if ($b == 0) {
			echo "ERROR: can't divide by 0 yo!!\n";
		} else {
			return $a / $b . PHP_EOL;
		}
	} else {
		error();
	}
}
echo divide(12,2);

function modulus($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) 	
	{
		return $a % $b . PHP_EOL;
	} else {
		error();
	}
}
echo modulus(23,4);
function error()
{
	echo "ERROR: Both arguments must be numbers\n";
}
?>

