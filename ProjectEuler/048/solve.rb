MAX = 1000
sum = 0 
(1..MAX).each do |digit|
	sum += digit**digit
end
puts sum.to_s[-10..-1]