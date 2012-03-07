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
	long long sum = 2+3;
	long number;
	for(number = 5; number < 2000000; number+=2) {
		if (is_prime(number))
		{
			sum += number;
		}
	}
	printf("%llu",sum);
}