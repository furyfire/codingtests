<?php
function pandigital($number) {
		$array = count_chars($number,1);
		ksort($array);
		if($array == array(49=>1,50=>1,51=>1,52=>1,53=>1,54=>1,55=>1,56=>1,57=>1)) { return true;} else { return false; }
}