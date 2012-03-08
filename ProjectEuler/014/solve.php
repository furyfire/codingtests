<?php
$max_steps = 0;
for($test=999999;$test>1;$test--) {
$ctest = $test;
$steps = 1;
	while($ctest != 1) {
		$ctest = ($ctest % 2) ? $ctest*3+1 : $ctest/2;
		$steps++;
	}

	if($steps > $max_steps) { $max_start = $test; $max_steps = $steps;}
}
echo $max_start;
