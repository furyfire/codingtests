
MAX = 6*9**5
value = 2;
total = 0;
for value in (2..MAX) do 
	a = 0
	
end
while($value<354294) {
	$a = 0;
	for($t=0;$t<strlen($value);$t++) {
		$a += pow(substr((string)$value,$t,1),5);
	}
	
	
	if($value == $a) { $total += $value;}
	
$value++;
}
echo $total;

