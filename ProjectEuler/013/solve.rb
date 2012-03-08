numbers = []
linenum = 0
ARGF.lines("\n") do |line|
	numbers[linenum] = Array.new
	numbers[linenum] = line.to_i
	linenum += 1
end

sum=0
numbers.each do |num|
	sum += num
end
puts sum.to_s[0..9]