<?php
define('A_START',2);
define('A_END',100);
define('B_START',2);
define('B_END',100);

for($a=A_START;$a<=A_END;$a++) {
	for($b=B_START;$b<=B_END;$b++) {
		$array[] = bcpow($a,$b);
	}
}
echo count(array_unique($array));