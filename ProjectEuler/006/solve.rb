square = 0
sum = 0
(1..100).each do |num| 
	square += num**2;
	sum += num;
end
puts sum**2 - square;