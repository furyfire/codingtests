GRID_SIZE = 20

def factorial(num) 
	if(num == 0) 
		return 1
	else 
		return num * factorial(num - 1)
	end
end

puts factorial(2 * GRID_SIZE) / factorial(GRID_SIZE) ** 2