MAX = 1000000
result = 0
(1..MAX).step(2) { |i|
	if(i.to_s == i.to_s.reverse) 
		if(i.to_s(2) == i.to_s(2).reverse) 
			result += i
		end
	end
}
print result