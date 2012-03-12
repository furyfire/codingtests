<?php
define('MAX',10000);

function d($int) {
	static $cache;
	if(isset($cache[$int])) {return $cache[$int]; }
	$sum = 0;
	for($n=1;$n<$int;$n++) {
		if($int % $n == 0)
			$sum += $n;
	}
	$cache[$int] = $sum;
	return $sum;
}

$result = 0;
for($number = 1; $number < MAX; $number++) {
	$d_sum = d($number);
	if($number != $d_sum AND $number == d($d_sum)) {
		$result += $number;
	}
}
echo $result;