<?php
$numbers = file('php://stdin');
$total = 0;
foreach($numbers as $number) {
	$total = bcadd($total,trim($number));
}
echo substr($total,0,10);