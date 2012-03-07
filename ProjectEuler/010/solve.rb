def is_prime(prime)     
    sqrt = Math.sqrt(prime)
	i=3
	while(i <= sqrt) 
        if (prime % i == 0) 
			return false
		end
		i+= 2
    end
    return true
end
 
number = 3
sum = 5
until(number >= 2000000) 
	number += 2
	if(is_prime(number))
		sum += number
	end
end
puts sum;
