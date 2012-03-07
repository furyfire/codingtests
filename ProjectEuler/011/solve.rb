matrix = []
linenum = 0
ARGF.lines("\n") do |line|
	matrix[linenum] = Array.new
	line.split.each do |str|
		matrix[linenum] << str.to_i
	end
	linenum += 1
end

max = 0
max = 0;
#Left and right
(0..19).each do |y|
	(0..16).each do |x|
		cmp = matrix[y][x] * matrix[y][x + 1] * matrix[y][x + 2] * matrix[y][x + 3];
		if (cmp > max)
			max = cmp
		end
	end
end

#Vertical
(0..16).each do |y|
	(0..19).each do |x|
		cmp = matrix[y][x] * matrix[y + 1][x] * matrix[y + 2][x] * matrix[y + 3][x];
		if (cmp > max)
			max = cmp
		end
	end
end

#Diagonally left->down
(0..16).each do |y|
	(0..16).each do |x|
		cmp = matrix[y][x] * matrix[y + 1][x + 1] * matrix[y + 2][x + 2] * matrix[y + 3][x + 3];
		if (cmp > max)
			max = cmp
		end
	end
end

#Diagonally right->down
(0..16).each do |y|
	(3..19).each do |x|
		cmp = matrix[y][x] * matrix[y + 1][x - 1] * matrix[y + 2][x - 2] * matrix[y + 3][x - 3];
		if (cmp > max)
			max = cmp
		end
	end
end

puts max