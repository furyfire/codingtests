<?php
define('MAX',1000000);
$result = 0;
for($i=1;$i<MAX;$i+=2) {
	if($i == strrev($i)) {
		$bin = decbin($i);
		if($bin == strrev($bin)) {
			$result += $i;
		}
	}
}
echo $result;