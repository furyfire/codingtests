<?php
define('MAX',1000000);

function is_prime($prime) {    
    $sqrt = sqrt($prime);
    for ($i = 3; $i <= $sqrt; $i+=2){
        if ($prime%$i == 0) return false; 
    } 
    return true; 
}
 
function fact($int){
	static $facts = array(1, 1, 2, 6, 24, 120, 720, 5040, 40320, 362880);
	return $facts[$int];
}
$primes = array(2);
$primes_ordered = array(2);
for($i=3;$i<MAX;$i+=2) {
	if(is_prime($i)) {
		//$primes[] = $i;
		$temp = str_split($i);
		sort($temp);
		$primes_ordered[] = implode($temp);
	}
}
echo "Found primes below 1mil\n";
$result = 0;
foreach($primes_ordered as $p) {
	$counts = fact(strlen($p));
	foreach($primes_ordered as $order) {
		if($p == $order) {
			$counts--;
		}
	}
	if($counts == 0) {
		//echo $p."\n";
		$result++;
	}
}
echo $result;