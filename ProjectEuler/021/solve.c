#define MAX 10000

#include <stdio.h>
#include <math.h>

int d( int input) {
	int sum = 0;
	int n;
	for(n=1;n<input;n++) {
		if(input % n == 0)
			sum += n;
	}
	return sum;
}

int main( )
{
	int result = 0;
	int number;
	int d_sum;
	for(number = 1; number < MAX; number++) {
		d_sum = d(number);
		if(number != d_sum && number == d(d_sum)) {
			result += number;
		}
	}
	printf("%d", result);
}