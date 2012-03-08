num = 3;
tri_add = 2;
begin
tri_add += 1
	num += tri_add
	
	divisors = 2;
	square_root = Math.sqrt(num);
	div = 2
	while(div <= square_root) 
		if(num % div == 0)
			divisors += 2;
		end
		div += 1
	end
end until (divisors > 500);
puts num;