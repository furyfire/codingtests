MAX = 10000

def d(num) 
	sum = 0
	1.upto(num-1) do |d|
		if(num % d == 0)
			sum += d
		end
	end
	return sum
end

result = 0
Range.new(0,MAX,true).each do |number|
d_sum = d(number)
	if(number != d_sum && number == d(d_sum))
		result += number
	end
end
puts result