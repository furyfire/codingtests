<?php
function pandigital($number) {
		$array = count_chars($number,1);
		ksort($array);
		if($array == array(49=>1,50=>1,51=>1,52=>1,53=>1,54=>1,55=>1,56=>1,57=>1)) { return true;} else { return false; }
}

while(true) {
$value++;

	$test = array(1,2);
	$key = 2;
	while(true) {
		$new = array();
		foreach($test as $p) {
			$new[] = $value * $p;
		}
		$var = implode('',$new);
		if(strlen($var) != 9) { break; }
		if(strlen($var) == 9 AND pandigital($var)) { $good[] = $var; break; }
		$test[] = $key++;
	}
	if($value > 9999) { break; }
}

rsort($good);
echo $good[0];