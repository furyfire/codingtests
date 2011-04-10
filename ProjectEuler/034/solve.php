<?php
$num = 3;
$result =0;
for($num = 3; $num < 99999; $num++) {
	$sum = 0;
	foreach(str_split($num) as $digit) {
		$sum += fact($digit);
	}
	if($sum == $num) { $result += $sum;}
}
echo $result;

function fact($int){
	static $facts = array(1, 1, 2, 6, 24, 120, 720, 5040, 40320, 362880);
	return $facts[$int];
}