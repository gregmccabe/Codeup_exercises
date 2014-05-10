<?php

$a = 2;

do 
{
	echo "$a\n";
	$a *= $a;
}
while ($a < 1,000,000);

