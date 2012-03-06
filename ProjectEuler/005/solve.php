<?php
for($i=20;true;$i+=20) {
	$div = 19;

	while(!($i % $div)) {
		$div--;
		if($div == 0) {
			echo $i;
			die;
		}
	}
}
