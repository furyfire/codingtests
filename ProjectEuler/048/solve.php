<?php
define('MAX',1000);
$sum = 0;
for($c =1; $c <= MAX;$c++) {
	$sum = bcadd($sum,bcpow($c,$c));
}
echo substr($sum,-10,10);