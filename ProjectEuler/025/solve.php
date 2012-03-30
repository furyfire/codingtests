<?php
define('DIGITS',1000);

$current = 1;
$prev = 1;
$term = 2;
while(strlen($current) < DIGITS) {
	$term++;
	$next = bcadd($current,$prev);
	$prev = $current;
	$current = $next;
}
echo $term;