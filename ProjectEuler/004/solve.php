<?php
$max = 0;
for($num1 = 1000; $num1>100; $num1--) {
	for($num2 = 1000; $num2>100; $num2--) {
		$sum = $num1 * $num2;
		
		//Check if palindrome 
		if($sum > $max AND strrev($sum) == $sum)
			$max = $sum;
			
	}
}
echo $max;
