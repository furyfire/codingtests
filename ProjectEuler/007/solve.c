#include <stdio.h>
#include <math.h>

int is_prime( int prime) {

	int max_test = sqrt( prime );

	int i;
    for (i = 3; i <= max_test; i+=2){
        if (prime % i == 0){
			return 0; 
		}
    } 
    return 1; 
}

int main( )
{
	//Use start val
	int i=13;
	int primes = 6;
	do{
		i+= 2;		
		if(is_prime(i)){
			primes++;
		}
		
	} while(primes < 10001);
	printf("%d", i);
}