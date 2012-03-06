<?php
function is_prime($prime) {    
    $sqrt = sqrt($prime);
    for ($i = 3; $i <= $sqrt; $i+=2){
        if ($prime%$i == 0) return false; 
    } 
    return true; 
} 
 
$i=13;
$primes = 6;
do{
    $i+= 2;
    if(is_prime($i)){
        $primes++;
    }
}while($primes < 10001);
echo $i;