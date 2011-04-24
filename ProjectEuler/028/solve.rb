
SIZE = 1001
SIDES = 4
sum = 1;
result=1;
(2...SIZE).step(2) { |add|
	SIDES.downto(1) { 
		sum += add;
		result += sum;
	}
}
puts result