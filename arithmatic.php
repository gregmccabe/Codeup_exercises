
<?php

function add($a, $b) 
{
	if (is_numeric($a) && is_numeric($b)) 
	{
		echo $a + $b . PHP_EOL;
	} else {
		echo "ERROR: Both arguments must be numbers\n";
	}
}
add(10,'greg');

function subtract($a, $b) 
{
	if (is_numeric($a) && is_numeric($b))
	{
		echo $a - $b . PHP_EOL;
	} else {
		echo "ERROR: Both arguments must be numbers\n";
	}
}
subtract('run', 42);

function multiply($a, $b) 
{
	if (is_numeric($a) && is_numeric($b))
	{
    echo $a * $b . PHP_EOL;
	} else {
		echo "ERROR: Both arguments must be numbers\n";
	}
}
multiply(30,TRUE);

function divide($a, $b) 
{
	if (is_numeric($a) && is_numeric($b))
    {
    echo $a / $b . PHP_EOL;
	} else {
		echo "ERROR: Both arguments must be numbers\n";
	}
}
divide(FALSE, FALSE);

function modulus($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) 	
	{
	echo $a % $b . PHP_EOL;
	} else {
		echo "ERROR: Both arguments must be numbers\n";
	}
}
modulus(23,'echo');

?>

