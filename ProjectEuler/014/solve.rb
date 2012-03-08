max_start = 0
max_steps = 0
test = 1

while(test < 1000000) 
		ctest = test
		steps = 1
		while(ctest != 1)
			ctest = ( ctest % 2 != 0) ? ctest * 3 + 1 : ctest / 2
			steps += 1
		end
		if(steps > max_steps)
			max_start = test
			max_steps = steps
		end
		test += 1
end 
puts max_start