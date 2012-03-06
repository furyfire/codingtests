def is_prime(prime)     
    sqrt = Math.sqrt(prime)
	i=3
	while(i <= sqrt) 
        if (prime % i == 0) 
			return false
		end
		i+= 2
    end
    return true; 
end
 
i=13
primes = 6
until (primes == 10001)
    i+= 2
    if(is_prime(i)) 
        primes+=1
	end
end
puts i