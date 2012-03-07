<?php
for ($a = 1; $a < 1000; $a++) {
	for ($b = 1; $b < 1000; $b++) {
		//Make it run reverse in order to find solution quickly
		$c = 1000 - $a - $b;
		if (pow($a, 2) + pow($b, 2) == pow($c, 2)) {
			echo $a * $b * $c;
			die;
		}
	}
}
