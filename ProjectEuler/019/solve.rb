require "date"
sundays = 0
(1901..2000).each do |year|
	(1..12).each do |month|
			dt = Date.new(year,month,1)
			sundays += (dt.wday == 0) ? 1 : 0
	end
end
puts sundays