<?php
function abundant($input) {
	$max = floor(sqrt($input));
	$sum = 1;
	for($div=2;$div<=$max ;$div++) {
		if($input % $div == 0) {
			$sum += ($input/$div != $div) ? $input/$div + $div : $div;
			if($sum > $input)
				return true;
		}
	}
	return false;
}
//Find all abundant numbers
for($number = 12; $number <= 28123 ; $number++) {
	if(abundant($number)) { $adjnum[] = $number; }
}

$sum = array_sum(range(1,23));
for($test = 24; $test <= 20162; $test++) {
	$nadundant = true;
	for($index = 0; $adjnum[$index] < $test; $index++) {
		if(abundant($test - $adjnum[$index])) {$nadundant = false; break; }
	}
	if($nadundant) {$sum += $test; }
}
echo $sum;