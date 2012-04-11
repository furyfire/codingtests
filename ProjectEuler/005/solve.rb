i = 0
while (true) 
i = i + 20
div = 19

	while((i % div) == 0) 
		div = div - 1
		if(div == 0) then
			puts i
			exit
		end
	end
end