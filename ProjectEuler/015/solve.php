<?php
define('GRID_SIZE',20);
function factorial($num) {
	if($num == 0) 
		return 1;
	else 
		return bcmul($num,factorial(bcsub($num,1)));
}

echo bcdiv(factorial(2* GRID_SIZE),bcpow(factorial( GRID_SIZE),2));

