<?php
$num = bcpow(2,1000);
$sum = 0;
for($c =0; $c < strlen($num);$c++) {
	$sum += $num[$c];
}
echo $sum;