<?php
for($i=1; $i<=100; $i++) {
	if($i % 3 == 0) {
		print "Fizz";
	}
	if($i % 5 == 0) {
		print "Buzz";
	}
	if($i % 3 AND $i % 5) {
		print $i;
	}
	print PHP_EOL;
}