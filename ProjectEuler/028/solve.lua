SIZE = 1001;
SIDES = 4;
	sum = 1;
	result=1;
	for addition = 2,SIZE,2 do
		for cside=0,(SIDES-1) do
			sum = sum + addition;
			result = result + sum;
		end
	end

print(result)