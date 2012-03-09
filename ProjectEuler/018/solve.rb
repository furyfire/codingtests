tri = []
linenum = 0
ARGF.lines("\n") do |line|
	tri[linenum] = Array.new
	line.split.each do |str|
		tri[linenum] << str.to_i
	end
	linenum += 1
end

(0..13).reverse_each do |y|
	0.upto(tri[y].size()-1) do |x|
		if( tri[y+1][x] > tri[y+1][x+1]) 
			tri[y][x] =  tri[y][x] + tri[y+1][x]
		else
			tri[y][x] = tri[y][x] + tri[y+1][x+1]
		end
	end
end
puts tri[0][0]