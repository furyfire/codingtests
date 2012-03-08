<?php
$num = 3;
$tri_add = 2;
do {
	$num += ++$tri_add;
	$divisors = 2;
	$square_root = sqrt($num);
	for($div = 2; $div <= $square_root; $div++) {
		if($num % $div == 0)
			$divisors+= 2;
	}
} while ($divisors <= 500);
echo $num;