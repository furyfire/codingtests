<?php
function fac($number) {
	if($number == 1) 
		return 1;
	return $number * fac($number-1);
}
$result = array(0,0,0,0,0,0,0,0,0,0);

$endsteps = 1000000;
$cstep = 0;
$cdigit = 9;
while($cdigit != 0) {
	
	do{
		$result[9-$cdigit]++;
		$cstep += fac($cdigit);
	} while ($cstep < $endsteps) ;
	
	echo "Done with $cdigit - steps:$cstep\n";
	$cdigit--;
}
echo "DONE!";
print_r($result);
echo " - ".$cstep ."\n";
echo "Result: 2783915460";
