<?php
foreach(file('php://stdin') as $line) {
$tri[] = explode(' ',trim($line));
}
for($y=count($tri);$y>=0;$y--) {

	for($x=0;$x<count($tri[$y]);$x++) {
	$cur = $tri[$y][$x];
		if($cur + $tri[$y+1][$x] > $cur + $tri[$y+1][$x+1]) {
			$tri[$y][$x] =  $cur + $tri[$y+1][$x];
		} else {
			$tri[$y][$x] = $cur + $tri[$y+1][$x+1];
		}
	}
}
echo $tri[0][0];