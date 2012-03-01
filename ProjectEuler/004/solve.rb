max = 0;
(100..1000).each do |num1|
	(100..1000).each do |num2|
		sum = num1 * num2
		if( sum > max and sum.to_s.reverse  == sum.to_s) 
			max = sum
		end
	end
end
print max