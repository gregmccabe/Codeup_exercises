<?php

$a = 5;
$b = 10;
$c = '10';

// add an else clause to the next two statements
if ($a < $b) 
{
    // output the appropriate result
    echo "$a is less than $b\n";
} 
else
{ 
    echo "$a is greater than $b\n";    
}

if ($b > $a) 
{
    // output the appropriate result
    echo "$b is greater than $a";
}
else
{
    echo "$b is less than $a\n";
}

// Shorten the next 2 statements into an if/else
if ($b >= $c) 
{
    // output the appropriate result
    echo "$b is greater than or equal to $c\n";
}
else 
{
    // output the appropriate result
    echo "$b is less than or equal $c\n";
}

// combine the next 4 conditionals into 
// one if/else/elseif block that checks in order for:
// identical, equal, not identical, not equal
if ($b == $c) 
{
    // output the appropriate result
    echo "$b is equal to $c\n";
} 
elseif ($b === $c) 
{
    // output the appropriate result
    echo "$b is identical to $c\n";
} 
elseif ($b != $c) 
{
    // output the appropriate result
    echo "$b is not equal to $c\n";
} 
elseif ($b !== $c) 
{
    // output the appropriate result
    echo "$b is not identical to $c\n";
} 

?>