<?php
	
fwrite(STDOUT, "enter starting: ");
$min = trim(fgets(STDIN));

if (!is_numeric($min)) {
	echo "must input numeric value\n";
	exit;
}

fwrite(STDOUT, "enter ending number: ");
$max = trim(fgets(STDIN));

if (!is_numeric($max)) {
	echo "must input numeric value\n";
	exit;
}

fwrite(STDOUT, "choose increment: ");
$incrementer = trim(fgets(STDIN));

if ($incrementer == ""){
	$incrementer = 1;
}
for ($a = $min; $a <= $max; $a += $incrementer) {
	echo "$a\n";
}

?>