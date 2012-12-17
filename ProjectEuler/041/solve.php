<?php

function pandigital_less($number) {

		$array = count_chars($number,1);
		
		foreach(range(1,count($array)) as $char) {
			if( $array[ord($char)]!== 1) return false;
		}
		return true;
}

function is_prime($prime) {
    //if($prime%2 == 0) return false;
    
    $sqrt = sqrt($prime);
    for ($i = 3; $i <= $sqrt; $i+=2){
        if ($prime%$i == 0) return false; 
    } 
    return true; 
} 
//We don't need to check uneven numbers
//Has to start with a 7 and therefor be 7 digits long
for($var = 7000001; $var < 8000000; $var=$var+2) { 
	if(is_prime($var) AND pandigital_less($var)) { $result =  $var; }
}
echo $result;