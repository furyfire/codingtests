<?
for ($beer=99; $beer>=0; $beer--)
{
	if ($beer==0) {
		echo "No more bottles of beer on the wall, no more bottles of beer.".PHP_EOL;
		echo "Go to the store and buy some more, 99 bottles of beer on the wall.".PHP_EOL;
	} 
	elseif ($beer==1) {
		echo "1 bottle of beer on the wall, 1 bottle of beer.".PHP_EOL;
		echo "Take one down and pass it around, no more bottles of beer on the wall.". PHP_EOL . PHP_EOL;
	} elseif ($beer==2) {
		echo $beer." bottles of beer on the wall, ".$beer." bottles of beer." . PHP_EOL;
		echo "Take one down and pass it around, ".($beer-1)." bottle of beer on the wall.".PHP_EOL . PHP_EOL;
	} else {
			echo $beer." bottles of beer on the wall, ".$beer." bottles of beer." . PHP_EOL;
			echo "Take one down and pass it around, ".($beer-1)." bottles of beer on the wall.".PHP_EOL . PHP_EOL;
	}
}