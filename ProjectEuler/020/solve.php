<?php
define('FACTORIAL',100);

function factorial($num) {
	if($num == 0) 
		return 1;
	else 
		return bcmul($num,factorial(bcsub($num,1)));
}
$sum = 0;
$fac = factorial(FACTORIAL);
for($c = 0; $c < strlen($fac); $c++) {
	$sum += $fac[$c];
}
echo $sum;