<?php
define('SIZE',1001);
define('SIDES',4);
$sum = 1;
$result=1;
for($addition = 2; $addition <= SIZE; $addition+=2) {
	for($cside = 0; $cside < SIDES; $cside++) {
		$sum += $addition;
		$result += $sum;
	}
}
echo $result;