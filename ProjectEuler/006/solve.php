<?php
$square =0;
$sum =0;
for($num=1;$num<101;$num++) {
	$square += pow($num,2);
	$sum += $num;

}
echo pow($sum,2) - $square;