sum = 2
fib = {1, 2, 3}
while fib[2] < 4000000 do
	fib[3] = fib[1] + fib[2]
	if(fib[3] % 2 == 0) then
		sum = sum + fib[3]
	end
	fib[1] = fib[2]
	fib[2] = fib[3]
end
print (sum )
