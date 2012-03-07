<?php

foreach(file('php://stdin') as $line) {
	$matrix[] = explode(' ', $line);
}
$max = 0;
//Left and right
for ($y = 0; $y < 19; $y++) {
	for ($x = 0; $x < 16; $x++) {
		$cmp = $matrix[$y][$x] * $matrix[$y][$x + 1] * $matrix[$y][$x + 2] * $matrix[$y][$x + 3];
		$max = ($cmp > $max) ? $cmp : $max;
	}
}

//Vertical
for($x = 0; $x < 19; $x++) {
	for ($y = 0; $y < 16; $y++) {
		$cmp = $matrix[$y][$x] * $matrix[$y + 1][$x] * $matrix[$y + 2][$x] * $matrix[$y + 3][$x];
		$max = ($cmp > $max) ? $cmp : $max;
	}
}

//Diagonally left->down
for($x = 0; $x < 16; $x++) {
	for ($y = 0; $y < 16; $y++) {
		$cmp = $matrix[$y][$x] * $matrix[$y + 1][$x + 1] * $matrix[$y + 2][$x + 2] * $matrix[$y + 3][$x + 3];
		$max = ($cmp > $max) ? $cmp : $max;
	}
}

//Diagonally right->down
for($x = 4; $x < 19; $x++) {
	for ($y = 0; $y < 16; $y++) {
		$cmp = $matrix[$y][$x] * $matrix[$y + 1][$x - 1] * $matrix[$y + 2][$x - 2] * $matrix[$y + 3][$x - 3];
		$max = ($cmp > $max) ? $cmp : $max;
	}
}

echo $max;