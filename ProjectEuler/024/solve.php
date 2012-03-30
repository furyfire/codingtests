<?php
define('NUM_PERMUTATION',1000000);
define('DIGITS',9);
$target = NUM_PERMUTATION - 1;

$digits = range(0, 9);
$permus = array(1 => 1);
for ($i = 2; $i <= 9; $i++) {
        $permus[$i] = $permus[$i - 1] * $i;
}
$permus = array_reverse($permus);
$values = array();

foreach ($permus as $n) {
        $values[] = floor($target / $n);
        $target = $target%$n;
}

$result = "";
foreach ($values as $val) {
        $result .= $digits[$val];
        unset($digits[$val]);
        sort($digits);
}
$result .= $digits[0];
echo $result;
