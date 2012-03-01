fib = [1, 2, 3];
sum = 2;
while(fib[2] < 4000000) 
	fib[2] = fib[0] + fib[1];
	if(fib[2] % 2 == 0) 
		sum += fib[2];
	end
	fib[0] = fib[1];
	fib[1] = fib[2];
end
puts sum;