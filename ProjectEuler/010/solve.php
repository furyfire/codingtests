<?php

function is_prime($prime) {    
    $sqrt = sqrt($prime);
    for ($i = 3; $i <= $sqrt; $i+=2){
        if ($prime%$i == 0) return false; 
    } 
    return true; 
} 
 
$sum = 2+3;
for($number = 5; $number < 2000000; $number+=2) {
	if (is_prime($number))
	{
		$sum += $number;
	}
}
echo $sum;