<?php
echo fgets(STDIN);
while($s = fgets(STDIN)) {
    if(trim($s) == '42')
	die;
    echo $s;
}