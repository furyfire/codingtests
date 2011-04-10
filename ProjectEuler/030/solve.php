<?php
define('POWER',5);
define('START',2);
define('END', 6*pow(9,POWER) );

$result = 0;
for($value = START; $value < END; $value++ ) {
	$cmp = 0;
	for($c= 0, $len = strlen($string), $string = (string)$value; $c< $len; $c++)
	{
		$cmp += pow($string[$c],POWER);
	}
	
	$result += ($value == $cmp) ? $value : 0;
}
echo $result;