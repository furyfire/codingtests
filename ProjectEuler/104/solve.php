<?php

function pandigital($num) {
	for ($i = 1; $i <= 9; $i++) {
		if(strpos($n,(string)$i) === false) {
			return false;
		}
	}
	return true;
}
$var = 1;
$k = 1;
while(true) {
	$k++;
	$new = bcadd($var,$prev);
	$prev = $var;
	$var = $new;
	
	if(pandigital(substr($var,-9)) AND pandigital(substr($var,0,9))) { echo $k; die; }
}