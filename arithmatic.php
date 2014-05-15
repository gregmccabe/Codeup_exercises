
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
add(10,10);

function subtract($a, $b) 
{
	if (is_numeric($a) && is_numeric($b))
	{
		echo $a - $b . PHP_EOL;
	} else {
		echo "ERROR: Both arguments must be numbers\n";
	}
}
subtract(75,42);

function multiply($a, $b) 
{
	if (is_numeric($a) && is_numeric($b)) {
    	echo $a * $b . PHP_EOL;
	} else {
		echo "ERROR: Both arguments must be numbers\n";
	}
}
multiply(30,3);

function divide($a, $b) 
{
	if (is_numeric($a) && is_numeric($b)) {
		if ($b == 0) {
			echo "ERROR: can't divide by 0 yo!!\n";
		} else {
            echo $a / $b . PHP_EOL;
        }
	} else {
		echo "ERROR: Both arguments must be numbers\n";
	}
}
divide(12,0);

function modulus($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) 	
	{
	echo $a % $b . PHP_EOL;
	} else {
		echo "ERROR: Both arguments must be numbers\n";
	}
}
modulus(23,4);

?>

