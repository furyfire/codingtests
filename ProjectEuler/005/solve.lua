i=0
while(true) do
	i = i + 20 
	div = 19
	while((i % div) == 0) do
		div = div - 1
		if(div == 0) then
			print(i)
			os.exit()
		end
	end
end