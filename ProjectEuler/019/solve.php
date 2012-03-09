<?php
$days_in_month = array( 
	1 => 31,
	2 => 28,
	3 => 31,
	4 => 30,
	5 => 31,
	6 => 30,
	7 => 31,
	8 => 31,
	9 => 30,
	10 => 31,
	11 => 30,
	12 => 31
);
$day_cycle = 0;
for($year=1900; $year <= 2000; $year++) {
	for($month=1; $month <= 12; $month++) {
	
		$cdates = $days_in_month[$month];
			if($month == 2) {
			if($year % 4 == 0) {
				$cdates = 29;
			}
			if($years % 100 == 0) {
				$cdates = 28;
			}
			if($years % 400 == 0) {
				$cdates = 29;
			}
			}
			$day_cycle += $cdates;
			if($day_cycle % 7 == 0) {
				if($year >= 1901) {$sum++; }
			}
	}
}
echo $sum;