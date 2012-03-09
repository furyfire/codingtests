FACTORIAL = 100
def factorial(num) 
	if(num == 0) 
		return 1
	else 
		return num * factorial(num - 1)
	end
end

number = factorial(FACTORIAL)
sum = 0

number.to_s.each_char do |c|
	sum += c.to_i
end
puts sum