<?php
define('MAX',1000);

$max_len = 0;
for($div = MAX; $div > 2; $div--) {
	$result = bcdiv('1',(string)$div,2000);
	
	for($len = 2; $len < 1000; $len++) {
		if(substr($result,10,$len) === substr($result,10+$len,$len)) {
			if($len > $max_len) {
				echo "Div: ".$div. " Len: ".$len."\n";
				$max_len = $len;
				$max_div = $div;
			}
			break;
		}
	}

}
echo $max_div;
