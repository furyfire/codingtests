<?php
$names = explode('","',substr(file_get_contents('php://STDIN'),1,-1));
sort($names);

foreach($names as $line=>$name) {
	for($c =0; $c < strlen($name); $c++) {
		$char_sum += ord($name[$c]) - 64;
	}
	$result += $char_sum * ($line+1);
	$char_sum = 0;
}
echo $result;