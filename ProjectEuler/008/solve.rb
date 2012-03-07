haystack = ''
ARGF.lines("\n") do |line|
	haystack << line.strip
end

max = 0
(1..(1000-4)).each do |index|
	compare = haystack[index].to_i * haystack[index+1].to_i * haystack[index+2].to_i * haystack[index+3].to_i * haystack[index+4].to_i
	if(compare > max) 
		max = compare
	end
end
puts max