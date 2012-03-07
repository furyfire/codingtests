<?php
$haystack = str_replace(array('\n','\r\n'),'',file_get_contents('php://stdin'));
for($i=0;$i<1000-4;$i++) {
	$cmp = $haystack[$i] * $haystack[$i+1] * $haystack[$i+2] * $haystack[$i+3] * $haystack[$i+4];
	$max = ($cmp > $max) ? $cmp : $max;
}

echo $max;