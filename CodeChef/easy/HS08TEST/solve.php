<?php
while($s=explode(' ',trim(fgets(STDIN)))) {
	
	if($s[1]%5) {
		echo $s[1];
		} else {
			$new = round($s[1]-$s[1]-0.5,2);
			if($new) 
				echo $new;
				else 
				echo $s[1];
				}
		}