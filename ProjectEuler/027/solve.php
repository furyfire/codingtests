<?php
function is_prime($prime) {  
	if($prime == 1) 
		return true;
	if($prime == 2)
		return true;
    $sqrt = sqrt($prime);
    for ($i = 3; $i <= $sqrt; $i+=2){
        if ($prime%$i == 0) return false; 
    } 
    return true; 
} 
$high = 0;
$max_primes = 0;
for($a=-999; $a<1000; $a++) {
	for($b=-999; $b<1000; $b=$b+2) {
		
		$n=0;
		while(true) {
		echo $n*$n + $a * $n + $b . "\n";
			if(!is_prime($n*$n + $a * $n + $b)) {
				if($n > $max_primes) {
					$max_primes = $n;
					echo "max: $n a: $a b: $b\n";
				}
				break;
			}
			$n++;
		}
	
	}
}