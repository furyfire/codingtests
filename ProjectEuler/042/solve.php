<?php
$words = explode('","',substr(file_get_contents('php://STDIN'),1,-1));

//Find triangles
for($t=1;$t<40;$t++) {
	$triangle_numbers[] = 0.5*$t*($t+1);
}

foreach($words as $word) {
	for($c =0; $c < strlen($word); $c++) {
		$char_sum += ord($word[$c]) - 64;	
	}
	if(in_array($char_sum,$triangle_numbers)) {
		$result++;
	}
	$char_sum = 0;
}
echo $result;